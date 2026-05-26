<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Fauna";
    $css = "css/dashboard-fauna.css";

    $level_akses = "admin";

    include '../../cek.php';
    include '../../template/head.php';
    ?>
    <style>
        .tambah-data {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;
    margin: 15px 290px 0;
    height: 50px;
    color: #fef9f2;
    border-style: none;
    cursor: pointer;
}
.tambah-button {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    background-color: #b9ff66;
    border-radius: 15px;
    color: #fef9f2;
    border-style: none;
    cursor: pointer;
}
.tambah-button p {
    font-size: 15px;
    font-weight: 500;
    color: black;
}
    </style>
</head>

<body>
    <?php include '../../template/admin-navbar.php'; ?>
    <?php include '../../template/sidebar.php'; ?>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">Selamat Datang Kembali,
            <?php echo $_SESSION['username']; ?>
        </h3>
        <p>Fauna</p>
    </div>
    
    <div class="tambah-data">
        <a class="tambah-button" href="admin/pages/tambah_spesies.php">
            <img src="assets/image/icon-dataDitambahkan.png">
            <button class="tambah-button"><p>Tambah Data</p></button>
        </a>
    </div>