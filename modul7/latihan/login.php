<?php
session_start();

$users = [
    "user1" => "12345",
    "admin" => "admin123"
];

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password) {
        session_regenerate_id(true);
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["login_time"] = time();

        header("Location: index.php");
        exit;
    }

    $error = "Username atau password salah!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
    <p><?= htmlspecialchars($error) ?></p>
</body>
</html>
