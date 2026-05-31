<?php
include 'koneksi.php';

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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            width: 100%;
            max-height: 100px;
            background-color: #3E7B27;
            padding: 10px 40px;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            z-index: 2;
        }

        .header.shrink {
            padding: 5px 50px;
        }

        .header.shrink .menu a {
            font-size: 14px;
        }

        .baris-atas {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logowallacea {
            background-image: url(assets/image/logo-putih.svg);
            width: 70px;
            height: 60px;
            background-position: center;
            background-size: contain;
        }


        .search-container {
            position: relative;
            flex: 1;
            max-width: 750px;
        }

        .search-container.shrink {
            height: 24px;
        }

        .search-container.shrink .logosearch {
            top: 50%;
            transform: translateY(-50%);
        }

        .logosearch {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            background-image: url(assets/image/search.svg);
            width: 18px;
            height: 18px;
            background-position: center;
            background-size: cover;
            z-index: 1;
        }

        input {
            width: 100%;
            height: 32px;
            background-color: white;
            border-radius: 30px;
            border: none;
            padding-left: 48px;
            font-size: 14px;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        input::placeholder {
            color: #aaa;
            font-weight: 300;
        }

        .header.shrink input {
            height: 32px;
            font-size: 12px;
        }

        .header.shrink .logosearch {
            top: 50%;
            transform: translateY(-50%);
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 50px;
            font-family: 'Poppins', sans-serif;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #d0ff95;
            text-decoration: none;
        }

        .profile-menu {
            position: relative;
        }

        .profile-btn {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            padding: 0;
            border: none;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .navbar-profile-img {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            display: block;
            cursor: pointer;
        }

        .dropdown {
            position: absolute;
            top: 55px;
            right: 0;
            width: 180px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: none;

            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
        }

        .dropdown.show {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-user {
            padding: 15px;
            background: #f5f5f5;
            font-weight: 600;
            color: #222;
        }

        .dropdown a {
            display: block;
            padding: 12px 15px;
            color: #222;
            text-decoration: none;
            transition: 0.2s;
        }

        .dropdown a:hover {
            background: #f0f0f0;
        }



        /* .header.shrink .profile {
            width: 38px;
            height: 38px;
        } */

        .buttons {
            display: flex;
            gap: 10px;
        }

        .login-btn {
            width: 85px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #B9FF66;
            border-radius: 100px;
            color: white;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #B9FF66;
            color: #222;
        }

        .register-btn {
            width: 85px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #B9FF66;
            border-radius: 100px;
            color: #222;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            transition: 0.3s;
        }

        .register-btn:hover {
            background: none;
            border: 2px solid #B9FF66;
            color: white;
        }


        /* Responsive */
        @media (max-width: 800px) {
            .header {
                padding: 15px 30px;
            }

            .baris-atas {
                flex-direction: column;
                gap: 15px;
            }

            .search-container {
                max-width: 100%;
                width: 100%;
            }

            .menu {
                flex-wrap: wrap;
                gap: 25px;
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="baris-atas">
            <div class="logowallacea"></div>
            <div class="search-container">
                <div class="logosearch"></div>
                <input type="text" placeholder="Cari Disini...">
            </div>
            <?php if (isset($_SESSION['username'])): ?>

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
            <a href="index.php">Home</a>
            <a href="category.php">Kategori</a>
            <a href="information.php">Informasi</a>
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