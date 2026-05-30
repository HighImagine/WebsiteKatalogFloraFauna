<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    $title = "Register";
    $css = "css/register.css";
    ?>
    <?php include 'template/head.php'; ?>
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['error'])):
        ?>

        <script>
            Swal.fire({
                icon: 'error',
                title: 'Username Sudah Terdaftar',
                text: '<?= $_SESSION['error']; ?>'
    });
        </script>

        <?php
        unset($_SESSION['error']);
    endif;
    ?>

    <div class="login">
        <div class="gambar">
            <img class="gambar-register" src="assets/image/gambar-register.jpg">
            <div class="register-text">
                <h3>Temukan Kehidupan Langka Wallacea</h3>
                <p style="font-size: 17px;">Eksplorasi Kehidupan Langka dalam Satu Tempat</p>
            </div>
        </div>
        <div class="form-container">
            <div class="form-logo">
                <img class="logo" src="assets/image/logo-hitam.svg">
            </div>
            <form class="register" action="proses_register.php" method="post">
                <div class="username">
                    <p class="username-placeholder" required>Masukkan Username</p>
                    <input class="input-username" type="text" name="username" placeholder="username anda" required>
                </div>
                <div class="password">
                    <p class="password-placeholder" required>Masukkan Password</p>
                    <input class="input-password" type="password" name="password" placeholder="password" required>
                </div>
                <button class="form-send" type="submit" name="submit">Register</button>
            </form>
            <div class="or" style="font-family: 'Poppins';">
                <span>or</span>
            </div>
            <button class="google-btn">
                <img src="assets/image/google.svg">
                <span>Sign in with Google</span>
            </button>
            <div class="registered">
                <div class="login-admin">
                    <a href="admin/login-admin.php">Login Sebagai Admin</a>
                </div>
                <div class="ada-akun">
                    <a href="login.php">Sudah Punya Akun? Login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>