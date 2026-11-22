-- 1. Membuat database (opsional, sesuaikan nama database dengan koneksi.php)
CREATE DATABASE IF NOT EXISTS db_pertemuan7;
USE db_pertemuan7;

-- 2. Membuat struktur tabel user sesuai gambar di modul
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 3. Mengisi contoh data awal sesuai gambar di modul
INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'andi', 'andi123'),
(2, 'bunga', 'bunga321');