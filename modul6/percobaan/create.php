<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username !== "" && $password !== "") {
        $stmt = mysqli_prepare($koneksi, "INSERT INTO pengguna (username, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: index.php");
        exit;
    }
    $pesan = "Username dan password wajib diisi.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Tambah Pengguna</title></head>
<body>
<h1>Tambah Pengguna</h1>
<?php if (!empty($pesan)) echo htmlspecialchars($pesan); ?>
<form method="POST">
    <p>Username: <input type="text" name="username" required></p>
    <p>Password: <input type="password" name="password" required></p>
    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
