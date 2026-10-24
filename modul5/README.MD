# Cara Menjalankan

Proyek ini berisi file php. Cara untuk menjalankan file PHP di komputer lokal dapat menggunakan dua metode: melalui PHP Command Line (CLI) dan menggunakan XAMPP.

## Tools
Pastikan Anda telah menginstal salah satu dari perangkat lunak berikut:
- **PHP** (jika ingin menjalankan via CLI).
- **XAMPP** (jika ingin menjalankan via Apache Web Server).

---

## Runing dengan PHP Command Line (CLI)

Pastikan PHP sudah diinstall dan sudah di tambahkan ke *Environment Variables* (Path) sistem, jika sudah dapat langsung menjalankan file melalui terminal atau Command Prompt.
   ```bash
   php index.php
   ```
atau dengan
   ```bash
   php -S localhost:8000
   ```

### A. Eksekusi Script Langsung
Gunakan cara ini jika `index.php` hanya berisi script logika/teks biasa tanpa antarmuka web:
1. Buka Terminal atau Command Prompt.
2. Arahkan ke direktori tempat file `index.php` berada:
   ```bash
   cd path/ke/folder/proyek