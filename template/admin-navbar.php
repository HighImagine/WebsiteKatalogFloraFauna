<?php
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

        .profile-menu {
            position: relative;
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

        .admin-dropdown {
            position: absolute;
            top: 55px;
            right: 0;
            width: 190px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: none;
            z-index: 9999;
        }

        .admin-dropdown.show {
            display: block;
        }

        .dropdown-admin {
            padding: 18px 16px;
            font-weight: 700;
            color: #222;
            background: white;
            border-bottom: 1px solid #f0f0f0;
        }

        .admin-dropdown a {
            display: block;
            padding: 14px 16px;
            color: #333;
            text-decoration: none;
            font-size: 15px;
        }

        .admin-dropdown a:hover {
            background: #f5f5f5;
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
                    <a href="logout.php">Logout</a>
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