<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wallacea</title>
    <base href="/website/">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Poppins:wght@400;500;600;700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .login {
            display: flex;
            height: 100vh;
        }

        .gambar {
            width: 50%;
            height: 100vh;
            position: relative;
        }

        .login-text {
            position: absolute;
            font-family: 'poppins';
            font-size: 24px;
            font-weight: 400;
            text-align: left;
            top: 160px;
            left: 175px;
            color: white;
            max-width: 300px;
        }

        .gambar-login {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            background-size: cover;
            display: block;
        }

        .input {
            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            margin: 10px 0px 10px 0px;
            width: 150px;
            height: 130px;
        }

        

        .form-login {
            display: flex;
            flex-direction: column;
            gap: 25px;
            align-items: center;
            justify-content: center;
            width: 350px;
            margin: 10px;
        }

        .username,
        .password {
            display: flex;
            flex-direction: column;
            font-family: 'poppins';
            font-weight: 500;
            font-size: 20px;
            gap: 3px;

        }

        .input-username,
        .input-password {
            font-family: 'poppins';
            font-weight: bold;
            width: 350px;
            height: 40px;
            border-radius: 15px;
            padding-left: 15px;
        }

        .form-send {
            width: 220px;
            height: 45px;
            font-family: 'poppins';
            font-weight: 500;
            border-radius: 15px;
            border: 1px solid black;
            background-color: #b9ff66;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .form-send:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);
            ;
        }
    .atau {
            margin: 10px;
            font-family: 'poppins';
            font-weight: 500;
            color: black;
        }
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 250px;
            height: 45px;
            margin: 15px;
            border: 1px solid #dadce0;
            border-radius: 8px;
            background-color: white;
            cursor: pointer;
            font-family: 'Poppins';
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .google-btn:hover {
            background-color: #f5f5f5;
            transform: translateY(-3px);
        }

        .google-btn img {
            width: 22px;
            height: 22px;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: black;
            font-weight: 500;
            margin: 10px 0;
        }

        .lupa-akun {
            margin-top: 15px;
            font-family: 'poppins';
            font-size: 14px;
            text-decoration: underline;
        }

        @media screen and (max-width: 600px) {
            .form {
                width: 40%;
            }

            .input-email {
                width: 100%;
            }

            .input-password {
                width: 100%;
            }

            .gambar {
                width: 100%;
            }
        }
    </style>
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
        <div class="input">
            <div class="logo-input">
                <img class="logo" src="assets/image/logo-hitam.svg">
            </div>
            <form class="form-login" action="proses_login.php" method="POST">
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
            <div class="atau" style="font-family: 'Poppins';">
                <span>atau</span>
            </div>
            <button class="google-btn">
                <img src="assets/image/google.svg">
                <span>Sign in with Google</span>
            </button>
            <div class="lupa-akun">
                <p class="lupa-akun-text">Lupa Password? Reset</p>
            </div>
        </div>
    </div>
</body>

</html>