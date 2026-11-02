<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = (int)($_POST["id"] ?? 0);
    $nama = trim($_POST["nama"] ?? "");
    $hp = trim($_POST["nomor_hp"] ?? "");
    $alamat = trim($_POST["alamat"] ?? "");
    if ($nama !== "" && $hp !== "" && $alamat !== "") {
        if ($id > 0) {
            $stmt = mysqli_prepare($koneksi, "UPDATE pembeli SET nama=?, nomor_hp=?, alamat=? WHERE id=?");
            mysqli_stmt_bind_param($stmt, "sssi", $nama, $hp, $alamat, $id);
        } else {
            $stmt = mysqli_prepare($koneksi, "INSERT INTO pembeli (nama, nomor_hp, alamat) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $nama, $hp, $alamat);
        }
        mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt);
    }
    header("Location: pembeli.php"); exit;
}
if (isset($_GET["hapus"])) {
    $id = (int)$_GET["hapus"];
    $stmt = mysqli_prepare($koneksi, "DELETE FROM pembeli WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id); mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt);
    header("Location: pembeli.php"); exit;
}
$edit = null;
if (isset($_GET["edit"])) {
    $id = (int)$_GET["edit"];
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM pembeli WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id); mysqli_stmt_execute($stmt);
    $edit = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt)); mysqli_stmt_close($stmt);
}
$result = mysqli_query($koneksi, "SELECT * FROM pembeli ORDER BY id");
?>
<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>Pembeli</title></head><body>
<h1>Pembeli</h1><a href="index.php">Index</a>
<form method="POST">
<input type="hidden" name="id" value="<?= (int)($edit["id"] ?? 0) ?>">
<p>Nama: <input name="nama" value="<?= htmlspecialchars($edit["nama"] ?? "") ?>" required></p>
<p>Nomor HP: <input name="nomor_hp" value="<?= htmlspecialchars($edit["nomor_hp"] ?? "") ?>" required></p>
<p>Alamat: <input name="alamat" value="<?= htmlspecialchars($edit["alamat"] ?? "") ?>" required></p>
<button type="submit"><?= $edit ? "Update" : "Tambah" ?></button>
</form>
<table border="1" cellpadding="8"><tr><th>ID</th><th>Nama</th><th>Nomor HP</th><th>Alamat</th><th>Aksi</th></tr>
<?php while ($r=mysqli_fetch_assoc($result)): ?><tr>
<td><?= (int)$r["id"] ?></td><td><?= htmlspecialchars($r["nama"]) ?></td>
<td><?= htmlspecialchars($r["nomor_hp"]) ?></td><td><?= htmlspecialchars($r["alamat"]) ?></td>
<td><a href="?edit=<?= (int)$r["id"] ?>">Edit</a> | <a href="?hapus=<?= (int)$r["id"] ?>" onclick="return confirm('Hapus?')">Hapus</a></td>
</tr><?php endwhile; ?></table>
</body></html>