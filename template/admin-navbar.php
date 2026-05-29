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

        .admin-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-admin {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }

        .admin-name {
            font-weight: 300;
        }
        form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
    </style>
</head>

<div class="header">
    <div class="header-kanan">
        <div class="searching">
            <form action="admin/index.php" method="GET">
                <input type="hidden" name="page" value="cari">
                <input class="search-input" type="text" name="keyword" placeholder="Cari data flora & fauna..."
                    value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button type="submit"
                    style="background: none; border: none; cursor: pointer; font-size: 16px;">
                    <img src="assets/image/search.svg" width="20">
                </button>
            </form>
        </div>
        <div class="admin-container">
            <img class="profile-admin" src="assets/image/profile-dummy1.svg">
            <div class="admin-info">
                <?php echo $_SESSION['username']; ?>
            </div>
        </div>

    </div>
</div>

</html>