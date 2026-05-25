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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/head.php"; ?>
    <link rel="stylesheet" href="css/ikan.css">
</head>

<body>

    <?php include "template/navbar.php"; ?>

    <div class="informasi-container">
        <div class="informasi">

            <img class="informasi-image" src="uploads/<?= $data['gambar']; ?>" alt="<?= $data['nama_umum']; ?>">

            <div class="informasi-text">

                <div class="title-container">

                    <div class="informasi-title">
                        <p><?= $data['nama_ilmiah']; ?></p>
                        <p>(<?= $data['nama_umum']; ?>)</p>
                    </div>

                </div>

                <div class="informasi-desc">

                    <p>
                        <?= ($data['deskripsi']); ?>
                    </p>

                </div>

            </div>

        </div>
    </div>

</body>

</html>