<?php
include "koneksi.php";

$title = "Kategori";
$css = "css/kategori.css";

$query = mysqli_query($conn, 
  "  SELECT kategori, MIN(gambar) AS gambar
    FROM spesies
    WHERE kategori != ''
    GROUP BY kategori
    ORDER BY kategori ASC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <?php include "template/head.php"; ?>
</head>
<body>

<?php include "template/navbar.php"; ?>

<section class="kategori-page">
    <h1>CARI BERDASARKAN KATEGORINYA</h1>

    <div class="kategori-grid">
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
            <a href="kategori-detail.php?kategori=<?= urlencode($row['kategori']); ?>" class="kategori-card">
                <img 
                    src="uploads/spesies/<?= htmlspecialchars($row['gambar']); ?>" 
                    alt="<?= htmlspecialchars($row['kategori']); ?>"
                >

                <h3><?= htmlspecialchars($row['kategori']); ?></h3>
            </a>
        <?php endwhile; ?>
    </div>
</section>

</body>
</html>