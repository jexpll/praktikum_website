# Cara Menjalankan

Proyek ini berisi file PHP yang digunakan untuk mempelajari dan mengimplementasikan operasi CRUD (*Create, Read, Update, Delete*) menggunakan PHP dan MySQL. Praktikum ini terdiri dari tiga bagian, yaitu percobaan, latihan, dan tugas.

Cara menjalankan file PHP di komputer lokal dapat menggunakan dua metode: melalui PHP Command Line (CLI) dan menggunakan XAMPP.

## Tools

Pastikan Anda telah menginstal perangkat lunak berikut:
- **PHP** (jika ingin menjalankan melalui CLI).
- **XAMPP** (jika ingin menjalankan melalui Apache Web Server).
- **Visual Studio Code** (untuk mengedit file PHP).
- **Web Browser** (untuk mengakses halaman website).

---

## Running dengan PHP Command Line (CLI)

Pastikan PHP sudah diinstal dan sudah ditambahkan ke *Environment Variables* (Path) sistem. Jika sudah, Anda dapat menjalankan file melalui Terminal atau Command Prompt.

```bash
php index.php
```

atau dengan menggunakan PHP Built-in Web Server:

```bash
php -S localhost:8000
```

### A. Menjalankan Script PHP

Gunakan cara ini jika ingin menjalankan file PHP melalui PHP Built-in Web Server.

1. Buka Terminal atau Command Prompt.
2. Arahkan ke direktori tempat file PHP berada:
   ```bash
   cd path/ke/folder/proyek
   ```
3. Jalankan perintah berikut:
   ```bash
   php -S localhost:8000
   ```
4. Buka browser dan akses alamat berikut:
   ```text
   http://localhost:8000
   ```

**Catatan:** Pastikan MySQL sudah berjalan dan database telah dibuat sebelum menjalankan aplikasi.

---

## Running dengan XAMPP

Pastikan XAMPP sudah terinstal di komputer. Jika sudah, Anda dapat langsung menjalankan proyek melalui Apache Web Server.

### A. Menjalankan XAMPP

1. Buka XAMPP Control Panel.
2. Klik **Start** pada Apache dan MySQL.
3. Pindahkan folder proyek ke direktori `htdocs`:
   ```text
   C:\xampp\htdocs\praktikum_web\modul6
   ```
4. Buka browser dan akses phpMyAdmin:
   ```text
   http://localhost/phpmyadmin
   ```

### B. Membuat Database

Sebelum menjalankan aplikasi, buat database terlebih dahulu menggunakan file `database.sql` yang tersedia pada masing-masing folder.

| Folder | Nama Database |
|---|---|
| percobaan | modul_6 |
| latihan | latihan_posts |
| tugas | cod_barang |

Langkah-langkah membuat database:

1. Buka phpMyAdmin.
2. Pilih tab **SQL**.
3. Buka file `database.sql` sesuai folder yang ingin dijalankan.
4. Salin seluruh script SQL.
5. Tempelkan script pada kolom SQL di phpMyAdmin.
6. Klik **Go** untuk menjalankan script.

### C. Menjalankan Percobaan 1–6

Percobaan ini membahas pembuatan database, koneksi database, serta implementasi CRUD menggunakan PHP.

File yang digunakan:
- `database.sql` — Membuat database dan tabel pengguna.
- `koneksi.php` — Menghubungkan PHP dengan database.
- `create.php` — Menambahkan data pengguna.
- `index.php` — Menampilkan data pengguna.
- `update.php` — Mengubah data pengguna.
- `delete.php` — Menghapus data pengguna.

Untuk menjalankan percobaan, buka browser dan akses:

```text
http://localhost/praktikum_web/modul6/percobaan/
```

### D. Menjalankan Latihan

Latihan ini membuat website berita sederhana menggunakan PHP dan MySQL dengan menerapkan operasi CRUD.

File yang digunakan:
- `database.sql` — Membuat database dan tabel posts.
- `koneksi.php` — Menghubungkan PHP dengan database.
- `index.php` — Menampilkan daftar berita.
- `create.php` — Menambahkan berita.
- `update.php` — Mengubah berita.
- `delete.php` — Menghapus berita.

Untuk menjalankan latihan, buka browser dan akses:

```text
http://localhost/praktikum_web/modul6/latihan/
```

### E. Menjalankan Tugas

Tugas ini membuat website pendataan COD (*Cash on Delivery*) barang menggunakan PHP dan MySQL.

Terdapat tiga tabel yang digunakan:
- **Barang** — Menyimpan ID, nama barang, dan harga.
- **Pembeli** — Menyimpan ID, nama, nomor HP, dan alamat.
- **Kurir** — Menyimpan ID, nama, dan nomor HP.

File yang digunakan:
- `database.sql` — Membuat database dan tabel.
- `koneksi.php` — Menghubungkan PHP dengan database.
- `index.php` — Menampilkan data barang, pembeli, dan kurir.
- `barang.php` — Mengelola data barang (CRUD).
- `pembeli.php` — Mengelola data pembeli (CRUD).
- `kurir.php` — Mengelola data kurir (CRUD).

Untuk menjalankan tugas, buka browser dan akses:

```text
http://localhost/praktikum_web/modul6/tugas/
```

---

## Catatan

- Pastikan Apache dan MySQL sudah berjalan sebelum menjalankan aplikasi.
- Pastikan database sudah dibuat sesuai dengan nama database pada file `koneksi.php`.
- Pastikan seluruh file PHP berada di dalam direktori `htdocs`.
- Gunakan browser untuk mengakses halaman website.