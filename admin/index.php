<?php
include '../cek.php';
include '../koneksi.php';

$level_akses = 'admin';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard-utama';

$allowed = [
    'dashboard-utama',
    'dashboard-flora',
    'dashboard-fauna',
    'spesies',
    'tambah',
    'edit',
    'user'
];

if (!in_array($page, $allowed)) {
    $page = 'dashboard-utama';
}
?>
<html>

<head>
    <?php
    $css = "css/dashboard-utama.css";
    $title = "Dashboard Utama";
    include '../template/head.php'; ?>
</head>
<body>

    <?php include '../template/admin-navbar.php'; ?>

    <?php include '../template/sidebar.php'; ?>
</html>


<div class="main">
    <div class="content">

        <?php
        echo $page;
        include '../admin/pages/' . $page . '.php';
        ?>
        <?php
        echo __DIR__;
        exit; 
        ?>
        ?>
    </div>
</div>