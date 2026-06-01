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
                $foto = !empty($navUser['foto'])
                    ? $navUser['foto']
                    : 'assets/image/default-profile.png';
                ?>

                <div class="profile-menu">
                    <img src="uploads/pfp/<?= htmlspecialchars($navUser['foto']); ?>" class="navbar-profile-img"
                        id="profileBtn">

                    <div class="dropdown" id="dropdownMenu">
                        <div class="dropdown-user">
                            <?= $_SESSION['username']; ?>
                        </div>

                        <a href="pages/profil.php">Profil</a>
                        <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin'): ?>
                            <a href="admin/index.php?page=dashboard-utama">
                                Dashboard Admin
                            </a>
                        <?php endif; ?>
                        <a href="logout.php" onclick="return confirm('Yakin ingin Logout?')">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="buttons">
                    <a href="login.php" class="login-btn">
                        Login
                    </a>
                    <a href="register.php" class="register-btn">
                        Register
                    </a>
                </div>  
            <?php endif; ?>
        </div>

        <div class="menu">
            <a href="kategori.php">Kategori</a>
            <a href="information.php">Informasi</a>
            <a href="pages/favorit.php">Favorit</a>
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