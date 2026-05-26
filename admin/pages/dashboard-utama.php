<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Utama";
    $css = "css/dashboard-utama.css";

    $level_akses = "admin";

    include '../../cek.php';
    include '../../template/head.php';
    ?>
    
</head>

<body>
    
<?php include '../../template/admin-navbar.php'; ?>

    <?php include '../../template/sidebar.php'; ?>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">Selamat Datang Kembali,
            <?php echo $_SESSION['username']; ?>
        </h3>
        <p>Dashboard</p>
    </div>
    <div class="tambah-data">
        <a class="tambah-button" href="admin/pages/tambah_spesies.php">
            <img src="assets/image/icon-dataDitambahkan.png">
            <button class="tambah-button"><p>Tambah Data</p></button>
        </a>
    </div>
    
</body>

</html>