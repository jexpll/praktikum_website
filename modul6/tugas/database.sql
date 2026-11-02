-- Kalo semester 1 lu udah lulus basis data harusnya lu paham maksud kode ini
CREATE DATABASE IF NOT EXISTS cod_barang;
USE cod_barang;

CREATE TABLE IF NOT EXISTS barang (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL
);
CREATE TABLE IF NOT EXISTS pembeli (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nomor_hp VARCHAR(20) NOT NULL,
    alamat VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS kurir (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nomor_hp VARCHAR(20) NOT NULL
);

INSERT INTO barang (id, nama, harga) VALUES
(1, 'Komputer', 5000000), (2, 'Laptop', 7500000), (3, 'Mouse', 150000);
INSERT INTO pembeli (id, nama, nomor_hp, alamat) VALUES
(1, 'Rizky', '081234567801', 'Purwokerto'),
(2, 'Anisa', '081234567802', 'Banyumas'),
(3, 'Bima', '081234567803', 'Purbalingga');
INSERT INTO kurir (id, nama, nomor_hp) VALUES
(1, 'Abdul', '082111111111'),
(2, 'Haris', '082222222222'),
(3, 'Dimas', '082333333333');
