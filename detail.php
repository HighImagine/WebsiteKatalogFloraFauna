<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM spesies WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

$title = $data['nama_ilmiah'];
$css = "css/detail.css";

$isFavorit = false;

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $spesies_id = $data['id'];

    $stmtFav = $conn->prepare("
        SELECT id FROM favorit
        WHERE user_id = ? AND spesies_id = ?
    ");

    $stmtFav->bind_param("ii", $user_id, $spesies_id);
    $stmtFav->execute();

    $resultFav = $stmtFav->get_result();

    $isFavorit = $resultFav->num_rows > 0;
}
;

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php include "template/head.php"; ?>
</head>

<body>

    <?php include "template/navbar.php"; ?>

    <main class="detail-page">

        <a href="javascript:history.back()" class="back-button">
            ← Kembali
        </a>

        <section class="detail-container">

            <div class="detail-image-box">
                <img src="uploads/spesies/<?= htmlspecialchars($data['gambar']); ?>"
                    alt="<?= htmlspecialchars($data['nama_umum']); ?>" class="detail-image">
            </div>

            <div class="detail-content">

                <div class="detail-header">
                    <div>
                        <h1><?= htmlspecialchars($data['nama_ilmiah']); ?></h1>
                        <h2>(<?= htmlspecialchars($data['nama_umum']); ?>)</h2>
                    </div>

                    <?php if (isset($_SESSION['id'])): ?>

                        <?php if ($isFavorit): ?>

                            <a href="action/hapus-favorit.php?id=<?= $data['id'];?>&from=detail" class="favorite-button active">
                                ♥ Favorit
                            </a>

                        <?php else: ?>

                            <a href="action/tambah-favorit.php?id=<?= $data['id']; ?>" class="favorite-button">
                                ♡ Favorit
                            </a>

                        <?php endif; ?>

                    <?php endif; ?>
                </div>

                <div class="detail-info">
                    <div class="info-row">
                        <span>Kategori</span>
                        <p><?= htmlspecialchars($data['kategori']); ?></p>
                    </div>

                    <div class="info-row">
                        <span>Jenis</span>
                        <p><?= htmlspecialchars($data['jenis']); ?></p>
                    </div>
                </div>

                <div class="detail-desc">
                    <p><?= nl2br(htmlspecialchars($data['deskripsi'])); ?></p>
                </div>

            </div>

        </section>

    </main>
    <?php include "template/footer.php"; ?>

</body>

</html>