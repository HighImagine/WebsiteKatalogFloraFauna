<?php
include 'cek.php';
include 'koneksi.php';

$level_akses = 'admin';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

$allowed = [
    'dashboard',
    'flora_fauna',
    'tambah',
    'edit',
    'user'
];

if (!in_array($page, $allowed)) {
    $page = 'dashboard';
}
?>

<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<div class="main">
    <div class="content">

        <?php
        include 'pages/' . $page . '.php';
        ?>

    </div>
</div>

<?php include 'templates/footer.php'; ?>