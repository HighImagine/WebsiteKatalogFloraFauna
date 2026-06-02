<?php
include __DIR__ . '/../koneksi.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $stmtNav = $conn->prepare("SELECT foto, username, level FROM users WHERE id = ?");
    $stmtNav->bind_param("i", $id);
    $stmtNav->execute();

    $navUser = $stmtNav->get_result()->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <?php include __DIR__ . '/../cek.php'; ?>
    <link rel="stylesheet" href="css/admin-navbar.css">
</head>

<body>
    <div class="header">
        <div class="header-kanan">

            <?php
            $foto = !empty($navUser['foto'])
                ? $navUser['foto']
                : 'assets/image/default-profile.png';
            ?>

            <div class="profile-menu">
                <img src="uploads/pfp/<?= htmlspecialchars($foto); ?>" class="navbar-profile-img" id="profileBtn">

                <div class="admin-dropdown" id="adminDropdownMenu">
                    <a href="admin/pages/dashboard-utama.php">Profil Saya</a>
                    <a href="logout.php" onclick="return confirm('Yakin ingin Logout?')">Logout</a>
                </div>
            </div>

        </div>

    </div>
    </div>
</body>
<script>
    const profileBtn = document.getElementById('profileBtn');
    const dropdownMenu = document.getElementById('adminDropdownMenu');

    if (profileBtn && dropdownMenu) {
        profileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function () {
            dropdownMenu.classList.remove('show');
        });

        dropdownMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }
</script>

</html>