<?php
include __DIR__ . '/../../koneksi.php';

$search = $_GET['search'] ?? '';
$jenis = $_GET['jenis'] ?? '';
$sort = $_GET['sort'] ?? 'terbaru';
//filtering
$where = "WHERE 1=1";
//searcj
if ($search != '') {
    $searchSafe = mysqli_real_escape_string($conn, $search);
    $where .= " AND (
        nama_umum LIKE '%$searchSafe%' 
        OR nama_ilmiah LIKE '%$searchSafe%'
        OR kategori LIKE '%$searchSafe%'
    )";
}

if ($jenis != '') {
    $jenisSafe = mysqli_real_escape_string($conn, $jenis);
    $where .= " AND jenis = '$jenisSafe'";
}
//sorting
if ($sort == 'terlama') {
    $order = "ORDER BY id ASC";
} elseif ($sort == 'az') {
    $order = "ORDER BY nama_umum ASC";
} elseif ($sort == 'za') {
    $order = "ORDER BY nama_umum DESC";
} else {
    $order = "ORDER BY id DESC";
}
//pagination
$limit = 5;
$page = $_GET['page'] ?? 1;
$page = (int) $page;

if ($page < 1) {
    $page = 1;
}

$start = ($page - 1) * $limit;
//hitung total data
$totalQuery = mysqli_query($conn, "SELECT COUNT(*) AS total FROM spesies $where");
$totalData = mysqli_fetch_assoc($totalQuery)['total'];

$totalPage = ceil($totalData / $limit);

$query = mysqli_query($conn, "SELECT * FROM spesies $where $order LIMIT $start, $limit");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Utama";
    $css = "css/dashboard-utama.css";
    ?>

    <?php include __DIR__ . '/../../template/head.php'; ?>
    <?php include __DIR__ . '/../../cek.php'; ?>
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
        <?php include __DIR__ . '/../../template/search-filter.php'; ?>
    </div>
    <main>
        <p style="margin: 20px 290px;">Jumlah Data: <?= $totalData; ?></p>
        <table style="margin:20px 290px; background:white;">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Umum</th>
                <th>Nama Ilmiah</th>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>

            <?php if (mysqli_num_rows($query) > 0): ?>
                <?php $no = $start + 1; ?>

                <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= $no++; ?></td>

                        <td>
                            <img src="uploads/spesies/<?= htmlspecialchars($row['gambar']); ?>" width="80">
                        </td>

                        <td><?= htmlspecialchars($row['nama_umum']); ?></td>

                        <td>
                            <i><?= htmlspecialchars($row['nama_ilmiah']); ?></i>
                        </td>

                        <td><?= htmlspecialchars($row['jenis']); ?></td>

                        <td><?= htmlspecialchars($row['kategori']); ?></td>

                        <td>
                            <a class="btn-edit" href="admin/index.php?page=edit&id=<?= $row['id']; ?>">
                                Edit
                            </a>

                            <a class="btn-hapus" href="admin/action/hapus.php?id=<?= $row['id']; ?>&from=dashboard-utama"
                                onclick="return confirm('Yakin hapus data?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>

            <?php else: ?>
                <tr>
                    <td colspan="7" class="data-kosong">
                        Data tidak ditemukan.
                    </td>
                </tr>
            <?php endif; ?>
        </table>
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                <a href="admin/pages/dashboard-utama.php?search=<?= urlencode($search); ?>&jenis=<?= urlencode($jenis); ?>&sort=<?= urlencode($sort); ?>&page=<?= $i; ?>"
                    class="<?= $i == $page ? 'active' : ''; ?>">
                    <?= $i; ?>
                </a>
            <?php endfor; ?>
        </div>
    </main>