<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    $title = "Register";
    $css = "css/register.css";
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
            window.location.href = "register.php";
        }
    </script>

</head>


<body>
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
                <div class="ada-akun">
                    <a href="login.php">Sudah Punya Akun? Login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'username'): ?>
        <div class="popup-overlay" id="error">
            <div class="popup">
                <h2>Username Sudah Terdaftar</h2>
                <p>Silakan gunakan username lain.</p>
                <button onclick="closeModal()">
                    Kembali
                </button>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>