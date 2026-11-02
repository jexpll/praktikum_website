<!-- Koneksi php, pasttin database.sql udah di buat -->
<?php
// Ini ngekoneksiin sql modul_6 ke localhost dengan user root dan no password, terus ke codingan lu, 
// gosah di tanya kenapa fungsinya gitu
// soalnya default codeny emg ke gini, laravel juga make inian
$koneksi = mysqli_connect("localhost", "root", "", "modul_6");
// kalo gagal muncul error, di baca itu errornya kenapa
if (!$koneksi) {
    die("Gagal koneksi: " . mysqli_connect_error());
}
?>