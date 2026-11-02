<?php
$koneksi = mysqli_connect("localhost", "root", "", "cod_barang");
if (!$koneksi) {
    die("Gagal koneksi: " . mysqli_connect_error());
}
?>
