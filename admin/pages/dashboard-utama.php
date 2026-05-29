<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Utama";
    $css = "css/dashboard-utama.css";
    ?>
    <?php include __DIR__ . '/../../cek.php'; ?>
    <?php include __DIR__ . '/../../template/head.php'; ?>
</head>

<body>
    <?php include __DIR__ . '/../../template/admin-navbar.php'; ?>
    <?php include __DIR__ . '/../../template/sidebar.php'; ?>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">
            Selamat Datang Kembali,
            <?= $_SESSION['username']; ?>
        </h3>

        <p>Dashboard</p>
    </div>