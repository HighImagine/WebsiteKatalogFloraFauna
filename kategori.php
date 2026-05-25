<?php
include 'template/head.php';
include 'template/navbar.php';
?>

<a href="detail.php?id=<?= $row['id']; ?>">
    <img src="uploads/<?= $row['gambar']; ?>">
    <h3><?= $row['nama_umum']; ?></h3>
</a>