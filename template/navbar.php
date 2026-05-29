<?php
// navbar.php - Untuk halaman user (frontend)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #2c5f2d;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logowallacea a {
            display: block;
            width: 150px;
            height: 40px;
            background-image: url('assets/logo.png');
            background-size: contain;
            background-repeat: no-repeat;
            text-indent: -9999px;
        }

        /* Search Bar */
        .Search_bar {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 30px;
            padding: 5px 15px;
            gap: 10px;
        }

        .logosearch {
            width: 20px;
            height: 20px;
            background-image: url('assets/search-icon.png');
            background-size: contain;
        }

        .Search_bar input {
            border: none;
            outline: none;
            padding: 8px;
            width: 250px;
            font-size: 14px;
        }

        /* Menu */
        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #ffd700;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }
            .Search_bar input {
                width: 180px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logowallacea">
        <a href="index.php">Wallacea</a>
    </div>

    <div class="Search_bar">
        <div class="logosearch"></div>
        <form action="cari.php" method="GET">
            <input type="text" name="keyword" placeholder="Cari flora & fauna..." autocomplete="off">
        </form>
    </div>

    <div class="menu">
        <a href="index.php">Beranda</a>
        <a href="flora.php">Flora</a>
        <a href="fauna.php">Fauna</a>
        <?php if (isset($_SESSION['username'])): ?>
            <a href="admin/index.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>