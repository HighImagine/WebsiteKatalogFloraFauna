<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Login Admin";
    $css = "css/login-admin.css";
    ?>
    <?php include '../template/head.php'; ?>
</head>

<body>
    <div class="background">
        <div class="pengatur_kotak_admin">
            <div class="warna_kotak">
                <div class="kotak_login_admin">
                    <div class="judul_login">Login Khusus Admin</div>
                    <form class="login-form" action="proses_login.php" method="post">
                        <div class="username">
                            <p>Masukkan Username</p>
                            <input class="input-username" type="text" name="username" required>
                        </div>
                        <div class="password">
                            <p>Masukkan Password</p>
                            <input class="input-password" type="password" name="password" required>
                        </div>
                        <button class="form-send" type="submit" name="login">Login</button>
                    </form>
                    <div class="or" style="font-family: 'Poppins', sans-serif"></div>
                    <div class="lupa-akun">
                        <p class="lupa-akun-text">Lupa Password? Reset</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>