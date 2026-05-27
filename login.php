<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Login";
    $css = "css/login.css";
    ?>
    <?php include 'template/head.php'; ?>
</head>

<body>
    <div class="login">
    <div class="gambar">
        <img class="gambar-login" src="assets/image/gambar-login.jpg">
        <div class="login-text">
            <h3>Jelajahi Keanekaragaman Wallacea</h3>
            <p style="font-size: 17px;">Eksplorasi Alam Wallacea</p>
        </div>
    </div>
    
    <div class="form-container">
        <div class="logo-input">
            <img class="logo" src="assets/image/logo-hitam.svg">
        </div>
        

        <form class="login-form" action="proses_login.php" method="POST">
            <div class="username">
                <p>Masukkan Username</p>
                <input class="input-username" type="text" name="username" placeholder="username" required>
            </div>
            <div class="password">
                <p>Masukan Password</p>
                <input class="input-password" type="password" name="password" placeholder="password" required>
            </div>
            <button class="form-send" type="submit" name="login">Login</button>
        </form>
        
        <div class="atau">
            <span>atau</span>
        </div>
        
        <button class="google-btn">
            <img src="assets/image/google.svg">
            <span>Sign in with Google</span>
        </button>
        
        <div class="registered">
            <div class="login-admin">
                <a href="admin/login-admin.php">Login Sebagai Admin</a>
            </div>
            <div class="lupa-akun">
                <a href="#">Lupa Password? Reset Password</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>