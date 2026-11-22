# Modul 7: PHP Session dan User Authentication

Repositori ini berisi kode praktikum, latihan, dan tugas untuk **Modul 7: PHP Session** (Praktikum Pemrograman Web, Informatika UNSOED). Materi berfokus pada manajemen state pengguna antar-halaman menggunakan mekanisme `$_SESSION` serta implementasi dasar autentikasi pengguna (*User Authentication*).

---

## Tujuan Pembelajaran

1. Memahami konsep kerja session dan peran `session_id` dalam menyimpan informasi akses pengguna di sisi server.
2. Mampu menggunakan fungsi-fungsi dasar session di PHP (`session_start()`, `session_unset()`, `session_destroy()`, dan variabel superglobal `$_SESSION`).
3. Mampu mengimplementasikan sistem autentikasi pengguna (registrasi, login, proteksi halaman, dan logout) baik menggunakan database MySQL maupun array statis.

---

## Prasyarat dan Lingkungan Pengembangan

- **Web Server & Database:** XAMPP (Apache dan MySQL)
- **Bahasa Pemrograman:** PHP 7.4+ / PHP 8.x
- **Code Editor:** Visual Studio Code
- **Direktori Kerja:** `htdocs/Pertemuan7_NIM/`

---

## Struktur Direktori

```text
Pertemuan7_NIM/
├── percobaan1/          # Mengirim data session antar halaman
│   ├── halaman1.php
│   └── halaman2.php
├── percobaan2/          # Mengatur (set) dan menghapus (destroy) session
│   ├── index.php
│   ├── set.php
│   └── destroy.php
├── percobaan3/          # Menginput data session melalui form POST
│   ├── index.php
│   ├── proses.php
│   └── home.php
├── Latihan/             # Sistem autentikasi berbasis database MySQL
│   ├── koneksi.php
│   ├── register.php
│   ├── login.php
│   └── index.php
└── Tugas/               # Sistem autentikasi berbasis array dengan auto-logout 10 detik
    ├── login.php
    ├── index.php
    └── logout.php