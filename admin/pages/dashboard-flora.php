<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Flora";
    $css = "css/dashboard-flora.css";

    $level_akses = "admin";
    include __DIR__ . '/../../cek.php';
    include __DIR__ . '/../../koneksi.php';
    include __DIR__ . '/../../template/head.php';
    $query = mysqli_query(
        $conn,
        "SELECT * FROM spesies WHERE jenis='flora' ORDER BY id DESC"
    );
    ?>
</head>

<body>
    <?php include __DIR__ . '/../../template/admin-navbar.php'; ?>
    <?php include __DIR__ . '/../../template/sidebar.php'; ?>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">Selamat Datang Kembali,
            <?php echo $_SESSION['username']; ?>
        </h3>
        <p>Flora</p>
    </div>

    <div class="tambah-data">
        <a href="admin/index.php?page=tambah_spesies&jenis=flora" class="tambah-button">
            <img src="assets/image/icon-dataDitambahkan.png" width="20" style="margin-right:5px;">
            Tambah Flora
        </a>
    </div>

    <table style="margin:20px 290px; background:white;">
        <tr>
            <th>Gambar</th>
            <th>Nama Umum</th>
            <th>Nama Ilmiah</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($query)): ?>
            <tr>

                <td>
                    <img src="uploads/spesies/<?= $row['gambar']; ?>" width="80">
                </td>

                <td><?= $row['nama_umum']; ?></td>

                <td>
                    <i><?= $row['nama_ilmiah']; ?></i>
                </td>

                <td><?= $row['kategori']; ?></td>

                <td>
                    <a class="btn-edit" href="admin/index.php?page=edit&id=<?= $row['id']; ?>">
                        Edit
                    </a>

                    

                    <a class="btn-hapus" href="admin/action/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus data?')"
                        &from=dashboard-flora>
                        Hapus
                    </a>
                </td>

            </tr>
        <?php endwhile; ?>

    </table>


</body>

</html>