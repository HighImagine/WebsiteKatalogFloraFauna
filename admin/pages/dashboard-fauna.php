<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Dashboard Fauna";
    $css = "css/dashboard-fauna.css";

    $level_akses = "admin";
    include '../index.php';
    $query = mysqli_query(
        $conn,
        "SELECT * FROM spesies WHERE jenis='fauna' ORDER BY id DESC"
    );
    ?>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">Selamat Datang Kembali,
            <?php echo $_SESSION['username']; ?>
        </h3>
        <p>Fauna</p>
    </div>
    <table border="1" cellpadding="10" cellspacing="0" style="margin:20px 290px; background:white;">
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
                    <a href="index.php?page=edit&id=<?= $row['id']; ?>">
                        Edit
                    </a>

                    |

                    <a href="admin/action/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus data?')"&from=dashboard-fauna">
                        Hapus
                    </a>
                </td>

            </tr>
        <?php endwhile; ?>

    </table>