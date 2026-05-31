<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <?php include __DIR__ . '/../cek.php'; ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }

        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: sticky;
            top: 0;
            left: 250px;
            height: 50px;
            width: 100vw;
            padding: 0 30px;
            background-color: #f7f7f7;
            z-index: 10;
        }

        .searching {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-input {
            padding: 5px 10px;
            border: 1px solid rgba(156, 156, 156, 0.3);
            border-radius: 15px;
            width: 200px;
        }

        .header-kanan {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .admin-profile-menu {
            position: relative;
        }

        .admin-container {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 12px;
            transition: 0.2s;
        }

        .admin-container:hover {
            background: #eeeeee;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
            color: #222;
        }

        .admin-role {
            font-size: 12px;
            color: #777;
        }

        .admin-dropdown {
            position: absolute;
            top: 55px;
            right: 0;
            width: 180px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: none;
            z-index: 999;
        }

        .admin-dropdown.show {
            display: block;
        }

        .admin-dropdown .dropdown-user {
            padding: 15px;
            background: #f5f5f5;
            font-weight: 600;
            color: #222;
        }

        .admin-dropdown a {
            display: block;
            padding: 12px 15px;
            color: #222;
            text-decoration: none;
            transition: 0.2s;
        }

        .admin-dropdown a:hover {
            background: #f0f0f0;
        }
    </style>
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
            <div class="admin-profile-menu">
                <div class="admin-container" id="adminProfileBtn">
                    <img class="profile-admin" src="assets/image/default-profile.png">

                    <div class="admin-info">
                        <h4 class="admin-name">
                            <?= $_SESSION['username']; ?>
                        </h4>

                        <p class="admin-role">
                            <?= ucfirst($_SESSION['level']); ?>
                        </p>
                    </div>
                </div>

                <div class="admin-dropdown" id="adminDropdownMenu">
                    <div class="dropdown-user">
                        <?= $_SESSION['username']; ?>
                    </div>

                    <a href="profil.php">Profil</a>
                    <a href="index.php">Homepage</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>

        </div>
    </div>
</body>
<script>
    const adminProfileBtn = document.getElementById('adminProfileBtn');
    const adminDropdownMenu = document.getElementById('adminDropdownMenu');

    if (adminProfileBtn && adminDropdownMenu) {
        adminProfileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            adminDropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', function () {
            adminDropdownMenu.classList.remove('show');
        });

        adminDropdownMenu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }
</script>

</html>