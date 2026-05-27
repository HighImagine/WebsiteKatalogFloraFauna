<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
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
    </style>
</head>

<div class="header">
    <div class="header-kanan">
        <div class="searching">
            <img src="assets/image/Search.png">
            <input class="search-input" type="text" placeholder="Cari data flora & fauna...">

        </div>
        <div class="admin-container">
            <img class="profile-admin" src="assets/image/profile-dummy1.svg">
            <div class="admin-info">
                <h4 class="admin-name">Devon Lane</h4>
            </div>
        </div>

    </div>
</div>
</html>