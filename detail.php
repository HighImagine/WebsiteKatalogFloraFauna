<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM spesies WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

// Set judul halaman = nama ilmiah
$title = $data['nama_ilmiah'];
$css = "css/detail.css";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/head.php"; ?>
</head>

<body>

    <?php include "template/navbar.php"; ?>

    <div class="informasi-container">
        <div class="informasi">

            <img class="informasi-image" src="uploads/spesies/<?= $data['gambar']; ?>" alt="<?= $data['nama_umum']; ?>">

            <div class="informasi-text">

                <div class="title-container">

                    <div class="informasi-title">
                        <p><strong><?= htmlspecialchars($data['nama_ilmiah']); ?></strong></p>
                        <p>(<?= htmlspecialchars($data['nama_umum']); ?>)</p>
                    </div>

                </div>

                <div class="informasi-desc">

                    <p>
                        <?= nl2br(htmlspecialchars($data['deskripsi'])); ?>
                    </p>

                </div>

            </div>

        </div>
    </div>

</body>

</html>