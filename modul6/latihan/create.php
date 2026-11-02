<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $judul = trim($_POST["judul"] ?? "");
    $konten = trim($_POST["konten"] ?? "");
    if ($judul !== "" && $konten !== "") {
        $stmt = mysqli_prepare($koneksi, "INSERT INTO posts (judul, konten) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $judul, $konten);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: index.php");
        exit;
    }
    $pesan = "Judul dan konten wajib diisi.";
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Tambah Post</title></head><body>
<h1>Tambah Post Berita</h1>
<?php if (!empty($pesan)) echo htmlspecialchars($pesan); ?>
<form method="POST">
    <p>Judul<br><input type="text" name="judul" maxlength="100" required></p>
    <p>Konten (pisahkan paragraf dengan baris kosong)<br>
    <textarea name="konten" rows="10" cols="60" maxlength="1000" required></textarea></p>
    <button type="submit">Tambah</button>
</form>
<a href="index.php">Batal</a>
</body></html>
