<?php
include "../cek.php";
include "../koneksi.php";

$user_id = $_SESSION['id'];

$title = "Favorit";
$css = "css/favorit.css";

$stmt = $conn->prepare("
    SELECT spesies.*
    FROM favorit
    JOIN spesies ON favorit.spesies_id = spesies.id
    WHERE favorit.user_id = ?
    ORDER BY favorit.created_at DESC
");

$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php include "../template/head.php"; ?>
</head>

<body>

    <?php include "../template/navbar.php"; ?>

    <main class="favorit-page">
        <div class="favorit-header">
            <h1>Favorit Saya</h1>
            <p>Lihat semua spesies yang pernah kamu tambahkan ke favorit.</p>
        </div>

        <div class="favorit-grid">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="favorit-card">

                    <a href="../action/hapus-favorit.php?id=<?= $row['id']; ?>" class="hapus-favorit"
                        onclick="return confirm('Hapus dari favorit?')">
                        ♥
                    </a>

                    <a href="detail.php?id=<?= $row['id']; ?>" class="favorit-link">
                        <img src="uploads/spesies/<?= htmlspecialchars($row['gambar']); ?>"
                            alt="<?= htmlspecialchars($row['nama_umum']); ?>">

                        <h3><?= htmlspecialchars($row['nama_umum']); ?></h3>
                        <p>(<?= htmlspecialchars($row['nama_ilmiah']); ?>)</p>
                    </a>

                </div>
            <?php endwhile; ?>
        </div>
    </main>

    <?php include "../template/footer.php"; ?>

</body>

</html>