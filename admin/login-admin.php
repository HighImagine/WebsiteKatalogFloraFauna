<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Wallacea</title>
    <base href="/website/">
    <link rel="stylesheet" href="css/login-admin.css">
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

        .background {
            background-image: url(assets/image/background-log-admin.png);
            background-size: contain;
            width: 100%;
            max-height: 100vh;

        }

        .pengatur_kotak_admin {
            display: flex;
            height: 100vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'poppins';

        }

        .warna_kotak {
            background: rgba(185, 255, 102, 0.2);
            width: 450px;
            height: 500px;
            border-radius: 15px;
            align-items: center;
            justify-content: center;
            margin-top: 25px;

        }

        .kotak_login_admin {
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            gap: 20px;
            margin-top: 25px;

        }

        .judul_login {
            font-weight: 700;
            font-size: 23px;
            margin-bottom: 35px;

        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;

        }

        .input {
            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: center;

        }

        .username,
        .password {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;

        }

        .username p {
            font-family: 'poppins';
            font-weight: 400;
            font-size: 13px;
            padding-left: 15px;
            padding-bottom: 8px;
        }

        .password p {
            font-family: 'poppins';
            font-weight: 400;
            font-size: 13px;
            padding-left: 15px;
            padding-bottom: 8px;
        }

        .input-username,
        .input-password {
            background: rgba(0, 0, 0, 0.02);
            font-weight: 400;
            color: white;
            font-family: 'poppins';
            font-weight: bold;
            border: 0.1px solid #ffffff;
            width: 350px;
            height: 33px;
            border-radius: 6px;
            padding-left: 15px;

        }

        .form-send {
            width: 200px;
            height: 40px;
            font-family: 'poppins';
            font-weight: 500;
            border-radius: 15px;
            border: 1px solid black;
            background-color: #b9ff66;
            cursor: pointer;
            transition: transform 0.2s ease;
            margin-top: 20px;

        }

        .form-send:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);

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
            margin-top: 5px;
            font-family: 'poppins';
            font-size: 14px;
            text-decoration: underline;
            cursor: pointer;

        }

        .or {
            width: 450px;
            height: 0px;
            border: 1px solid;
            margin: 17px auto 10px auto;

        }
    </style>
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