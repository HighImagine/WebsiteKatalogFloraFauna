<?php
include '../cek.php';
include '../koneksi.php';

$level_akses = 'admin';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard-utama';

$allowed = [
    'dashboard-utama',
    'spesies',
    'tambah',
    'edit',
    'user'
];

if (!in_array($page, $allowed)) {
    $page = 'dashboard-utama';
}
?>

<?php include '../template/header.php'; ?>
<?php include '../template/navbar.php'; ?>

<div class="main">
    <div class="content">

        <?php
        echo $page;
        include '../pages/' . $page . '.php';
        ?>

    </div>
</div>

<?php include '../template/footer.php'; ?>