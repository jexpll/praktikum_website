<?php
    require "koneksi.php";
    /* Menggabungkan baris yang memiliki ID sama pada ketiga tabel. */
    $sql = "SELECT barang.id, barang.nama AS nama_barang, barang.harga,
                pembeli.nama AS nama_pembeli, kurir.nama AS nama_kurir
            FROM barang
            INNER JOIN pembeli ON barang.id = pembeli.id
            INNER JOIN kurir ON barang.id = kurir.id
            ORDER BY barang.id";
    $result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data COD Barang</title>
</head>
<body>
    <h1>Menampilkan Data dari Database!</h1>
    <nav>
        <a href="barang.php">Barang</a> |
        <a href="pembeli.php">Pembeli</a> |
        <a href="kurir.php">Kurir</a>
    </nav>
    <table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Nama Pembeli</th>
        <th>Nama Kurir</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= (int)$row["id"] ?></td>
        <td><?= htmlspecialchars($row["nama_barang"]) ?></td>
        <td><?= htmlspecialchars($row["nama_pembeli"]) ?></td>
        <td><?= htmlspecialchars($row["nama_kurir"]) ?></td>
    </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>