-- Kalo semester 1 lu udah lulus basis data harusnya lu paham maksud kode ini
CREATE DATABASE IF NOT EXISTS latihan_posts;
USE latihan_posts;

CREATE TABLE IF NOT EXISTS posts (
    id INT(11) NOT NULL AUTO_INCREMENT,
    judul VARCHAR(100) NOT NULL,
    konten VARCHAR(1000) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO posts (judul, konten) VALUES
('Starlink menghadirkan layanan internet baru',
 'Starlink terus mengembangkan layanan internet berbasis satelit untuk menjangkau wilayah yang belum terlayani jaringan kabel. Teknologi ini menjadi salah satu alternatif konektivitas di daerah terpencil.\n\nPengguna tetap perlu memperhatikan biaya perangkat, biaya berlangganan, serta kondisi cuaca dan lokasi pemasangan.'),
('Netflix memperkenalkan paket berlangganan',
 'Netflix menawarkan beberapa pilihan paket agar pengguna dapat memilih layanan sesuai kebutuhan. Setiap paket memiliki ketentuan kualitas video dan jumlah perangkat yang berbeda.\n\nSebelum berlangganan, pengguna sebaiknya membandingkan harga, fitur, dan ketentuan yang berlaku di wilayah masing-masing.'),
('Perkembangan teknologi kecerdasan buatan',
 'Kecerdasan buatan semakin banyak digunakan dalam pendidikan, industri, dan layanan digital. Teknologi ini dapat membantu mengolah data dan menyelesaikan pekerjaan tertentu.\n\nMeskipun demikian, hasil AI tetap perlu diperiksa manusia agar akurat, aman, dan sesuai konteks.');
