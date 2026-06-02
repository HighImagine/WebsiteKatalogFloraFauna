<?php
include "koneksi.php";

$kategori = $_GET['kategori'] ?? '';

$title = $kategori;
$css = "css/kategori-detail.css";

$stmt = $conn->prepare("
    SELECT * FROM spesies
    WHERE kategori = ?
    ORDER BY nama_umum ASC
");

$stmt->bind_param("s", $kategori);
$stmt->execute();

$query = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php include "template/head.php"; ?>
</head>

<body>

    <?php include "template/navbar.php"; ?>

    <section class="kategori-detail-page">

    <a href="kategori.php" class="back-button">
                ← Semua Kategori
            </a>
        <div class="kategori-header">
            <h1><?= htmlspecialchars($kategori); ?></h1>
            <p>Daftar spesies dalam kategori ini</p>
        </div>

        <div class="spesies-grid">

            <?php while ($row = $query->fetch_assoc()): ?>

                <a href="detail.php?id=<?= $row['id']; ?>" class="spesies-card">

                    <img src="uploads/spesies/<?= htmlspecialchars($row['gambar']); ?>"
                        alt="<?= htmlspecialchars($row['nama_umum']); ?>">

                    <div class="spesies-info">

                        <h3>
                            <?= htmlspecialchars($row['nama_umum']); ?>
                        </h3>

                        <p class="ilmiah">
                            <?= htmlspecialchars($row['nama_ilmiah']); ?>
                        </p>

                        <p class="deskripsi">
                            <?= htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 50, "...")); ?>
                        </p>

                    </div>

                </a>

            <?php endwhile; ?>

        </div>

    </section>

    <?php include "template/footer.php"; ?>
</body>

</html>