<?php
include "../../cek.php";
include "../../koneksi.php";

// hanya admin
if ($_SESSION['level'] != 'admin') {
    echo "Akses ditolak.";
    exit();
}

$sql = "SELECT id, username, email, level, foto, about FROM users ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <?php $title = "Data User"; ?>
    <?php $css = "css/user.css"; ?>
    <?php include "../../template/head.php"; ?>
</head>

<body>

<?php include "../../template/admin-navbar.php"; ?>
<?php include "../../template/sidebar.php"; ?>

<div class="user-page" style="margin: 0 0 0 290px">
    <div class="user-header">
        <h1>Data User</h1>
        <p>Daftar semua akun yang sudah terdaftar di website Wallacea.</p>
    </div>

    <table class="user-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Tentang</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php $no = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $no++; ?></td>

                        <td>
                            <img 
                                src="uploads/pfp/<?= !empty($row['foto']) ? $row['foto'] : 'default-profile.png'; ?>" 
                                class="user-photo"
                                alt="Foto User"
                            >
                        </td>

                        <td><?= htmlspecialchars($row['username']); ?></td>

                        <td>
                            <?= !empty($row['email']) 
                                ? htmlspecialchars($row['email']) 
                                : '-'; 
                            ?>
                        </td>

                        <td>
                            <span class="role-badge">
                                <?= htmlspecialchars($row['level']); ?>
                            </span>
                        </td>

                        <td>
                            <?= !empty($row['about']) 
                                ? htmlspecialchars($row['about']) 
                                : '-'; 
                            ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="empty">Belum ada user terdaftar.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>