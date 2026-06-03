<?php
include __DIR__ . '/../koneksi.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$navUser = null;

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
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <div class="header">
        <div class="baris-atas">
            <a href="index.php" class="logowallacea"></a>
            <div class="search-container">
                <div class="logosearch"></div>
                <input type="text" placeholder="Cari Disini...">
            </div>
            <?php if (isset($_SESSION['username'])): ?>

                <?php
                $foto = 'assets/image/default-profile.png';
                if (!empty($navUser['foto'])) {
                    $foto = $navUser['foto'];
                }
                ?>

                <div class="profile-menu">
                    <img src="uploads/pfp/<?= htmlspecialchars($foto); ?>" class="navbar-profile-img" id="profileBtn">

                    <div class="dropdown" id="dropdownMenu">
                        <?php if ($navUser['level'] == 'admin'): ?>
                            <a href="admin/pages/dashboard-utama.php">Profil Saya</a>
                        <?php else: ?>
                            <a href="pages/profil.php">Profil Saya</a>
                        <?php endif; ?>
                        <a href="logout.php" onclick="return confirm('Yakin ingin Logout?')">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="buttons">
                    <a href="login.php" class="login-btn">
                        Login
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <div class="menu">
            <a href="index.php">Beranda</a>
            <a href="kategori.php">Kategori</a>
            <?php if (isset($_SESSION['id'])): ?>
                <a href="pages/favorit.php">Favorit</a>
            <?php else: ?>
                <a href="index.php?popup=login">Favorit</a>
            <?php endif; ?>
        </div>
    </div>
    <script>
        window.addEventListener('scroll', function () {
            const header = document.querySelector('.header');
            const logowallacea = document.querySelector('.logowallacea');
            // const searchContainer = document.querySelector('.search-container');
            const menuLinks = document.querySelectorAll('.menu a');
            // const profile = document.querySelector('.profile');

            if (window.scrollY > 50) {
                header.classList.add('shrink');
                logowallacea.classList.add('shrink');
                // searchContainer.classList.add('shrink');
                menuLinks.forEach(link => link.classList.add('shrink'));
                // profile.classList.add('shrink');
            } else {
                header.classList.remove('shrink');
                logowallacea.classList.remove('shrink');
                // searchContainer.classList.remove('shrink');
                menuLinks.forEach(link => link.classList.remove('shrink'));
                // profile.classList.remove('shrink');
            }
        });

        const profileBtn = document.getElementById('profileBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

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
</body>

</html>