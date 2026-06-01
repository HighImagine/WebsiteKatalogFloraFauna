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
    <link rel="stylesheet" href="css/admin-navbar.css"
</head>

<body>
    <div class="header">
        <div class="header-kanan">
            <div class="searching">
                <form action="admin/index.php" method="GET">
                    <input type="hidden" name="page" value="cari">
                    <input class="search-input" type="text" name="keyword" placeholder="Cari data flora & fauna..."
                        value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                    <button type="submit" style="background: none; border: none; cursor: pointer; font-size: 16px;">
                        <img src="assets/image/search.svg" width="20">
                    </button>
                </form>
            </div>

            <?php
            $foto = !empty($navUser['foto'])
                ? $navUser['foto']
                : 'assets/image/default-profile.png';
            ?>

            <div class="profile-menu">
                <img src="uploads/pfp/<?= htmlspecialchars($foto); ?>" class="navbar-profile-img" id="profileBtn">

                <div class="admin-dropdown" id="adminDropdownMenu">
                    <div class="dropdown-admin">
                        <?= htmlspecialchars($navUser['username']); ?>
                    </div>

                    <a href="pages/profil.php">Profil</a>
                    <a href="index.php">Homepage</a>
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