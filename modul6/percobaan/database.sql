-- Ini di copas terus di masukkin ke http://localhost/phpmyadmin/ di tab sql
-- Modul gaje anjim, kurang jelas tuh ngasih step
-- http://localhost/phpmyadmin/index.php?route=/server/sql
-- Habis di copas klik tombol tulisan 'go'
-- Kalo semester 1 lu udah lulus basis data harusnya lu paham maksud kode ini
CREATE DATABASE IF NOT EXISTS modul_6;
USE modul_6;

CREATE TABLE IF NOT EXISTS pengguna (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);