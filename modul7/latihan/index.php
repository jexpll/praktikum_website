<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (time() - $_SESSION["login_time"] >= 10) {
    header("Location: logout.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <script>
        setTimeout(() => location.href = "logout.php", 10000);
    </script>
</head>
<body>
    <h2>Selamat datang, <?= htmlspecialchars($_SESSION["username"]) ?>!</h2>
    <p>Anda akan otomatis logout setelah 10 detik.</p>
    <a href="logout.php">Logout</a>
</body>
</html>