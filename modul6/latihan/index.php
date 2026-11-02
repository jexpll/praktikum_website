<?php
require "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM posts ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Post News Ter-Update!</title></head>
<body>
<h1>Post News Ter-Update!</h1>
<p><a href="create.php">Tambah Post</a></p>
<?php while ($post = mysqli_fetch_assoc($result)): ?>
<article>
    <h2><?= (int)$post["id"] ?>. <?= htmlspecialchars($post["judul"]) ?></h2>
    <p><a href="update.php?id=<?= (int)$post["id"] ?>">Edit</a> |
       <a href="delete.php?id=<?= (int)$post["id"] ?>" onclick="return confirm('Hapus post ini?')">Delete</a></p>
    <?php foreach (preg_split("/\r\n|\n|\r/", $post["konten"]) as $paragraf): ?>
        <?php if (trim($paragraf) !== ""): ?><p><?= nl2br(htmlspecialchars($paragraf)) ?></p><?php endif; ?>
    <?php endforeach; ?>
</article>
<hr>
<?php endwhile; ?>
</body>
</html>
