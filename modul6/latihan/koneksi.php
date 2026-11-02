<?php
$koneksi = mysqli_connect("localhost", "root", "", "latihan_posts");
if (!$koneksi) {
    die("Gagal koneksi: " . mysqli_connect_error());
}
?>
