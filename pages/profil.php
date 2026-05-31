<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $css = "css/profile.css";
    $title = "Profil";
    ?>

    <?php include "cek.php" ?>
    <?php include "template/head.php" ?>
</head>

<body>

    <div class="profile-page">

        <div class="profile-card">

            <a href="index.php" class="back-button">
                ←
            </a>

            <div class="profile-top">
                <img class="profile-pict" src="assets/image/default-profile.png">

                <h2><?= $_SESSION['username']; ?></h2>

                <p class="role">
                    <?= ucfirst($_SESSION['level']); ?>
                </p>

                <button class="edit-button">
                    Edit Profil
                </button>
            </div>

            <div class="information">

                <div class="info-item">
                    <span>Username</span>
                    <p><?= $_SESSION['username']; ?></p>
                </div>

                <div class="info-item">
                    <span>About</span>
                    <p>Just a Normal Person</p>
                </div>

                <div class="info-item">
                    <span>Email</span>
                    <p>Belum ditambahkan</p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>