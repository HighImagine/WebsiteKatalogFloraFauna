<?php
include "../cek.php";
include "../koneksi.php";

$id = $_SESSION['id'];

$stmt = $conn->prepare("SELECT username, level, foto, email, about FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <?php $css = "css/profile.css" ?>
    <?php $title = "Profil"?>
    <?php include '../template/head.php'; ?>
</head>
<body>

<div class="profile-page">
    <a href="admin/pages/dashboard-utama.php" class="back-button">←</a>
    <div class="profile-card">
        <div class="profile-left">
            <img 
                src="uploads/pfp/<?= htmlspecialchars($user['foto']); ?>" 
                class="profile-photo"
            >
            <h2><?= htmlspecialchars($user['username']); ?></h2>
            <p><?= ucfirst($user['level']); ?></p>
            <a href="pages/edit-profil.php" class="edit-button">Edit Profil</a>
        </div>
        <div class="profile-right">
            <h2>Data Diri</h2>
            <div class="info-item">
                <span>Username</span>
                <p><?= htmlspecialchars($user['username']); ?></p>
            </div>
            <div class="info-item">
                <span>Tentang</span>
                <p>
                    <?= !empty($user['about']) 
                        ? htmlspecialchars($user['about']) 
                        : "Belum ada deskripsi." 
                    ?>
                </p>
            </div>
            <div class="info-item">
                <span>Email</span>
                <p>
                    <?= !empty($user['email']) 
                        ? htmlspecialchars($user['email']) 
                        : "Belum ditambahkan." 
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>