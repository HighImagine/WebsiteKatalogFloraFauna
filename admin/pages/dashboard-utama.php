<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Utama";
    $css = "css/dashboard-utama.css";
    ?>
    <?php include '../../template/head.php'; ?>
    <?php include '../../cek.php'; ?>
</head>

<body>
    <?php include '../../template/admin-navbar.php'; ?>
    <?php include '../../template/sidebar.php'; ?>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">
            Selamat Datang Kembali,
            <?= $_SESSION['username']; ?>
        </h3>

        <p>Dashboard</p>
    </div>

    <div class="tambah-data">
        <a href="index.php?page=tambah">
            <button class="tambah-button">
                <img src="assets/image/icon-dataDitambahkan.png" width="20" style="margin-right:5px;">

                <p>Tambah Data</p>
            </button>
        </a>
    </div>