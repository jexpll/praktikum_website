<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = (int)($_POST["id"] ?? 0);
    $nama = trim($_POST["nama"] ?? "");
    $harga = (float)($_POST["harga"] ?? 0);
    if ($nama !== "" && $harga >= 0) {
        if ($id > 0) {
            $stmt = mysqli_prepare($koneksi, "UPDATE barang SET nama=?, harga=? WHERE id=?");
            mysqli_stmt_bind_param($stmt, "sdi", $nama, $harga, $id);
        } else {
            $stmt = mysqli_prepare($koneksi, "INSERT INTO barang (nama, harga) VALUES (?, ?)");
            mysqli_stmt_bind_param($stmt, "sd", $nama, $harga);
        }
        mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt);
    }
    header("Location: barang.php"); exit;
}
if (isset($_GET["hapus"])) {
    $id = (int)$_GET["hapus"];
    $stmt = mysqli_prepare($koneksi, "DELETE FROM barang WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id); mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt);
    header("Location: barang.php"); exit;
}
$edit = null;
if (isset($_GET["edit"])) {
    $id = (int)$_GET["edit"];
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM barang WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id); mysqli_stmt_execute($stmt);
    $edit = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt)); mysqli_stmt_close($stmt);
}
$tampil_form = isset($_GET["tambah"]) || $edit;
$result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="index.php">Index</a>
    <?php if (!$tampil_form): ?>
    <p>
        <a href="barang.php?tambah=1">Tambah Barang</a>
    </p>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($r=mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= (int)$r["id"] ?></td><td><?= htmlspecialchars($r["nama"]) ?></td>
            <td>Rp <?= number_format((float)$r["harga"],0,',','.') ?></td>
            <td><a href="barang.php?edit=<?= (int)$r["id"] ?>">Edit</a> | <a href="barang.php?hapus=<?= (int)$r["id"] ?>" onclick="return confirm('Hapus barang?')">Hapus</a>
            </td>
        </tr><?php endwhile; ?>
    </table>
    <?php else: ?>
    <h2><?= $edit ? "Edit Barang" : "Tambah Barang" ?></h2>
    <form method="POST">
        <?php if ($edit): ?>
        <input type="hidden" name="id" value="<?= (int)$edit["id"] ?>">
        <?php endif; ?>
        <p>Nama: <input name="nama" maxlength="100" value="<?= htmlspecialchars($edit["nama"] ?? "") ?>" required></p>
        <p>Harga: <input type="number" name="harga" min="0" step="0.01" value="<?= htmlspecialchars($edit["harga"] ?? "") ?>" required></p>
        <button type="submit"><?= $edit ? "Update" : "Tambah" ?></button>
    </form>
    <a href="barang.php">Kembali</a>
    <?php endif; ?>
</body>
</html>