#!/usr/bin/env python3
"""Renombra carpetas de fotos al formato ISO YYYY-MM-DD.

Acepta: DD-MM-YYYY, D-M-YYYY, DD/MM/YYYY, YYYY_MM_DD, etc.
Uso: python rename_folders.py <ruta>
"""
import os, re, sys
from pathlib import Path

PATTERNS = [
    (re.compile(r'^(\d{1,2})[-_/\. ](\d{1,2})[-_/\. ](\d{4})$'), lambda m: f"{m[3]}-{int(m[2]):02d}-{int(m[1]):02d}"),
    (re.compile(r'^(\d{4})[-_/\. ](\d{1,2})[-_/\. ](\d{1,2})$'), lambda m: f"{m[1]}-{int(m[2]):02d}-{int(m[3]):02d}"),
]

def iso_name(name: str) -> str | None:
    for rx, fmt in PATTERNS:
        m = rx.match(name.strip())
        if m:
            return fmt(m)
    return None

def main(root: str) -> int:
    base = Path(root)
    if not base.is_dir():
        print(f"No es directorio: {root}", file=sys.stderr); return 1
    for child in sorted(base.iterdir()):
        if not child.is_dir(): continue
        new = iso_name(child.name)
        if new and new != child.name:
            target = base / new
            if target.exists():
                print(f"SKIP (existe): {child.name} -> {new}"); continue
            child.rename(target)
            print(f"{child.name} -> {new}")
    return 0

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Uso: python rename_folders.py <ruta>"); sys.exit(2)
    sys.exit(main(sys.argv[1]))
