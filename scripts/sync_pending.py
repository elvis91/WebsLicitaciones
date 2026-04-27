#!/usr/bin/env python3
"""Detecta y sube fotos pendientes a Hostinger."""
import os, re, subprocess, sys, io
from pathlib import Path
sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

ROME = Path(r"C:\Users\elvis\OneDrive\3. Negocios Cotizaciones\Paginas Proyectos\Rome")
SSH_KEY = os.path.expanduser("~/.ssh/id_ed25519")
SSH_USER = "u925954286@88.223.84.32"
SSH = ["ssh", "-p", "65002", "-i", SSH_KEY, "-o", "BatchMode=yes", SSH_USER]
SCP_BASE = ["scp", "-P", "65002", "-i", SSH_KEY]

NOG_RE = re.compile(r'(?<!\d)(\d{8})(?!\d)')
DATE_RE = re.compile(r'^\d{4}-\d{2}-\d{2}$')
EXTS = {'.jpg', '.jpeg', '.png', '.JPG', '.JPEG', '.PNG'}

# 1. Listar dominios remotos
domains = subprocess.check_output(SSH + ["ls /home/u925954286/domains/"], text=True).strip().split()
nog_to_domain = {}
for d in domains:
    m = re.match(r'nog(\d{8})\.', d)
    if m:
        nog_to_domain[m.group(1)] = d
print(f"Dominios remotos: {len(nog_to_domain)}")

# 2. Encontrar carpetas de proyecto locales (con NOG en el nombre)
years = [p for p in ROME.iterdir() if p.is_dir() and re.match(r'^20\d{2}$', p.name)]
projects = []
for year in years:
    for sub in year.iterdir():
        if not sub.is_dir(): continue
        m = NOG_RE.search(sub.name)
        if m:
            projects.append((m.group(1), sub))
        else:
            # Mes intermedio (Enero, Febrero...)
            for sub2 in sub.iterdir():
                if not sub2.is_dir(): continue
                m2 = NOG_RE.search(sub2.name)
                if m2:
                    projects.append((m2.group(1), sub2))

print(f"Proyectos locales con NOG: {len(projects)}")

# 3. Por proyecto, comparar y subir
total_uploaded = 0
total_skipped_no_site = 0
report = []

for nog, proj_path in projects:
    domain = nog_to_domain.get(nog)
    if not domain:
        total_skipped_no_site += 1
        report.append(f"  ⚠️  NOG {nog} sin sitio remoto ({proj_path.name})")
        continue

    # Listar carpetas de fecha locales
    local_dates = {}
    for d in proj_path.iterdir():
        if d.is_dir() and DATE_RE.match(d.name):
            files = [f for f in d.iterdir() if f.is_file() and f.suffix in EXTS]
            if files:
                local_dates[d.name] = files

    if not local_dates: continue

    # Listar carpetas remotas y conteo
    remote_base = f"/home/u925954286/domains/{domain}/public_html/imagenes"
    cmd = f"for d in {remote_base}/*/; do echo \"$(basename $d) $(ls $d 2>/dev/null | wc -l)\"; done 2>/dev/null"
    try:
        out = subprocess.check_output(SSH + [cmd], text=True, stderr=subprocess.DEVNULL).strip()
        remote_counts = {}
        for line in out.splitlines():
            parts = line.split()
            if len(parts) == 2 and DATE_RE.match(parts[0]):
                remote_counts[parts[0]] = int(parts[1])
    except subprocess.CalledProcessError:
        remote_counts = {}

    proj_uploaded = 0
    proj_lines = []
    for date, files in sorted(local_dates.items()):
        n_local = len(files)
        n_remote = remote_counts.get(date, 0)
        if n_local <= n_remote:
            continue
        # Subir
        remote_dir = f"{remote_base}/{date}"
        subprocess.run(SSH + [f"mkdir -p '{remote_dir}'"], check=True)
        scp_cmd = SCP_BASE + [str(f) for f in files] + [f"{SSH_USER}:{remote_dir}/"]
        result = subprocess.run(scp_cmd, capture_output=True, text=True)
        if result.returncode == 0:
            proj_lines.append(f"    ✅ {date}: +{n_local - n_remote} fotos ({n_local} local / {n_remote} remoto)")
            proj_uploaded += (n_local - n_remote)
        else:
            proj_lines.append(f"    ❌ {date}: error scp — {result.stderr.strip()[:100]}")

    if proj_lines:
        report.append(f"\n📂 NOG {nog} → {domain}")
        report.extend(proj_lines)
        total_uploaded += proj_uploaded

print("\n=== RESULTADO ===")
print("\n".join(report) if report else "Nada que subir — todo sincronizado.")
print(f"\nTotal fotos subidas: {total_uploaded}")
if total_skipped_no_site:
    print(f"Proyectos sin sitio remoto: {total_skipped_no_site}")
