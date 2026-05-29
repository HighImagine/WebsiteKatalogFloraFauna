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
    'tambah_spesies',
    'edit',
    'user',
    'cari'
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
    

<div class="main">
    <div class="content">

        <?php
        include 'pages/' . $page . '.php';
        ?>

    </div>
</div>
</body>
</html>