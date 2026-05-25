<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Wallacea</title>
    <base href="/website/">
    <link rel="stylesheet" href="css/dashboard-utama.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="header-kanan">
            <div class="searching">
                <input class="search-input" type="text" placeholder="Cari data flora & fauna...">
                <button><img src="assets/image/Search.png"></button>
            </div>
            <img class="profile-admin" src="assets/image/profile-dummy1.svg" alt="Profile">
            <div class="admin-info">
                <h4 class="admin-name">Devon Lane</h4>
                <p class="admin-email">Devonlane@example.com</p>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <img class="logo" src="assets/image/logo-hitam.svg">
        <div class="sidebar-menu">
            <div class="menu-atas">
                <ul>
                    <li class="menu1"><img src="assets/image/icon-home.svg"><a href="dashboard-utama.html">Dashboard</a></li>
                    <li class="menu2"><img src="assets/image/icon-flora.svg"><a href="dashboard-flora.html">Flora</a></li>
                    <li class="menu3"><img src="assets/image/icon-fauna.svg"><a href="dashboard-fauna.html">Fauna</a></li>
                </ul>
            </div>

            <div class="menu-bawah" style="margin: 240px 0px 0px 0px;">
                <ul>
                    <li class="menu4"><img src="assets/image/icon-setting.svg"><a href="#">Settings</a></li>
                    <li class="menu5"><img src="assets/image/icon-logout.svg"><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="selamat-datang-text">
        <h3 style="font-weight: 500;">Selamat Datang Kembali,
            Admin.</h3>
        <p>Dashboard</p>
    </div>
    <div class="tambah-data">
        <a href="admin/tambah.php"><button class="tambah-button">Tambah Data</button></a>
    </div>
    
</body>

</html>