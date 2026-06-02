<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Login";
    $css = "css/login.css";
    ?>
    <?php include 'template/head.php'; ?>
    <style>
        .popup-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: fadeIn 0.3s ease;
        }

        .popup {
            width: 420px;
            background: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            animation: popUp 0.3s ease;
        }

        .popup h2 {
            margin-bottom: 12px;
            color: #222;
        }

        .popup p {
            color: #666;
            line-height: 1.6;
        }

        .popup button {
            margin-top: 20px;
            background: #b9ff66;
            color: #222;
            border: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .popup button:hover {
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes popUp {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>

    <script>
        function closeModal() {
            window.location.href = "login.php";
        }
    </script>
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
                <div class="register">
                    <a href="register.php">Belum punya akun? Register</a>
                </div>
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
    <?php if (isset($_GET['error']) && $_GET['error'] == 'username'): ?>
        <div class="popup-overlay" id="error">
            <div class="popup">
                <h2>Username Tidak Ditemukan</h2>
                <p>Pastikan username yang kamu masukkan sudah benar.</p>
                <button onclick="closeModal()">Kembali</button>
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'password'): ?>
        <div class="popup-overlay" id="error">
            <div class="popup">
                <h2>Password Salah</h2>
                <p>Silakan coba lagi dengan password yang benar.</p>
                <button onclick="closeModal()">Kembali</button>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>