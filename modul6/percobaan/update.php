<?php
require "koneksi.php";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$id) { die("ID tidak valid."); }

$stmt = mysqli_prepare($koneksi, "SELECT username, password FROM pengguna WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$data = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
mysqli_stmt_close($stmt);
if (!$data) { die("Data tidak ditemukan."); }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";
    if ($username !== "" && $password !== "") {
        $stmt = mysqli_prepare($koneksi, "UPDATE pengguna SET username = ?, password = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssi", $username, $password, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: index.php");
        exit;
    }
    $pesan = "Semua kolom wajib diisi.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Edit Pengguna</title></head>
<body>
<h1>Edit Pengguna</h1>
<?php if (!empty($pesan)) echo htmlspecialchars($pesan); ?>
<form method="POST">
    <p>Username: <input name="username" value="<?= htmlspecialchars($data["username"]) ?>" required></p>
    <p>Password: <input type="text" name="password" value="<?= htmlspecialchars($data["password"]) ?>" required></p>
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
