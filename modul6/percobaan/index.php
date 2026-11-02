<?php
require "koneksi.php";
$result = mysqli_query($koneksi, "SELECT id, username, password FROM pengguna ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Data Pengguna</title></head>
<body>
<h1>Data Pengguna</h1>
<a href="create.php">Tambah Pengguna</a>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Username</th><th>Password</th><th>Aksi</th></tr>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= (int)$row["id"] ?></td>
    <td><?= htmlspecialchars($row["username"]) ?></td>
    <td><?= htmlspecialchars($row["password"]) ?></td>
    <td>
        <a href="update.php?id=<?= (int)$row["id"] ?>">Edit</a> |
        <a href="delete.php?id=<?= (int)$row["id"] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
