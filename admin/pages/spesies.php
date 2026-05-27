<?php
include __DIR__ . '/../../koneksi.php';

$jenis = $_GET['jenis'] ?? ''; 
$query = mysqli_query($conn, "SELECT * FROM spesies WHERE jenis = '$jenis'");
?>

<h2>Data Spesies</h2>
    
<a href="index.php?page=tambah">
    Tambah Data
</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama Umum</th>
        <th>Nama Ilmiah</th>
        <th>Jenis</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($query)):
        ?>
        <tr>
            <td><?= $no++; ?></td>

            <td>
                <img src="<?= __DIR__ . '/../../uploads/spesies/' . $row['gambar']; ?>" width="100">
            </td>

            <td><?= $row['nama_umum']; ?></td>

            <td>
                <i><?= $row['nama_ilmiah']; ?></i>
            </td>

            <td><?= ucfirst($row['jenis']); ?></td>

            <td><?= ucfirst($row['kategori']); ?></td>

            <td>
                <a href="index.php?page=edit&id=<?= $row['id']; ?>">
                    Edit
                </a>

                |

                <a href="action/hapus.php?id=<?= $row['id']; ?>"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>