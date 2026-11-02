<?php
require "koneksi.php";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$id) die("ID tidak valid.");
$stmt = mysqli_prepare($koneksi, "SELECT judul, konten FROM posts WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$post = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
mysqli_stmt_close($stmt);
if (!$post) die("Post tidak ditemukan.");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $judul = trim($_POST["judul"] ?? "");
    $konten = trim($_POST["konten"] ?? "");
    if ($judul !== "" && $konten !== "") {
        $stmt = mysqli_prepare($koneksi, "UPDATE posts SET judul = ?, konten = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssi", $judul, $konten, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: index.php");
        exit;
    }
    $pesan = "Judul dan konten wajib diisi.";
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Edit Post</title></head><body>
<h1>Edit Post Berita</h1>
<?php if (!empty($pesan)) echo htmlspecialchars($pesan); ?>
<form method="POST">
    <p>Judul<br><input type="text" name="judul" maxlength="100" value="<?= htmlspecialchars($post["judul"]) ?>" required></p>
    <p>Konten<br><textarea name="konten" rows="10" cols="60" maxlength="1000" required><?= htmlspecialchars($post["konten"]) ?></textarea></p>
    <button type="submit">Update</button>
</form>
<a href="index.php">Batal</a>
</body></html>
