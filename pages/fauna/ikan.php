<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../../template/head.php"; ?>
    <link rel="stylesheet" href="css/ikan.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .header {
            width: 100%;
            height: 80px;
            background-color: #3E7B27;

        }

        input {
            text-decoration: none;
            width: 900px;
            height: 35px;
            background-color: white;
            border-radius: 25px;
            margin-top: 10px;
            margin-left: 190px;
            border: none;
            padding-left: 50px;
            text-align: left;

        }

        a {
            text-decoration: none;
            color: black;

        }

        .logosearch {
            position: absolute;
            background-image: url(assets/image/Search.png);
            margin-left: 200px;
            margin-top: -30px;
            width: 27px;
            height: 25px;
            background-position: center;
            background-size: cover;

        }

        .logowallacea {
            background-image: url(assets/image/logo-putih.svg);
            margin-left: 45px;
            margin-top: -45px;
            width: 80px;
            height: 60px;
            background-position: center;
            background-size: cover;

        }

        .logoprofil {
            background-image: url(assets/image/profile-dummy1.svg);
            position: absolute;
            left: 1150px;
            top: 20px;
            width: 45px;
            height: 40px;
            background-position: center;
            background-size: cover;
            border-radius: 100px;
            transition: transform 0.5s ease;

        }

        .logoprofil:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);

        }

        .menu {
            display: flex;
            font-family: 'poppins';
            color: white;
            margin-top: -60px;
            margin-left: 320px;
            gap: 80px;
            margin-top: -5px;

        }

        .menu a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
            cursor: pointer;

        }

        .menu a:hover {
            text-decoration: underline;
        }

        .informasi-container {
            display: flex;
            align-items: flex-start;
            background-color: #fef9f2;
            border: 1px solid;
            border-radius: 5px;
            margin: 50px 0px 0px 25px;
            width: 1300px;
            height: auto;
        }

        .informasi {
            display: flex;
            font-family: 'poppins';
            gap: 10px;
        }

        .informasi-image {
            width: 223px;
            height: 339px;
            border-radius: 5px;
            margin: 30px;
            object-fit: cover;
        }

        .informasi-text {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .title-container {
            display: flex;
        }

        .informasi-title {
            font-size: 24px;
            font-weight: 600;
            max-width: 600px;
            margin: 30px 0px 0px 0px;
        }

        .button {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #b9ff66;
            font-family: 'poppins';
            border: none;
            padding: 10px 20px;
            margin: 30px 10px 0 auto;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            width: 120px;
            height: 40px;
            transition: transform 0.15s ease;
        }

        .button:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);
        }

        .informasi-desc {
            font-size: 18px;
            font-weight: 400;
            max-width: 920px;
            text-align: justify;

        }

        .informasi-desc p {
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    <div class="header">
        <div class="Search_bar">
            <form action="Search_menu.html"><input type="text" placeholder="Cari Disini..."></form>
            <div class="logosearch"></div>
        </div>

        <div class="logowallacea"></div>

        <a href="Profil_user.html">
            <div class="logoprofil"></div>
        </a>

        <div class="menu">
            <a href="homepage-after.html">
                <p>Homepage</p>
            </a>
            <a href="category.html">
                <p>Category</p>
            </a>
            <a href="information.html">
                <p>Information</p>
            </a>
            <a href="comunity.html">
                <p>Comunity</p>
            </a>
            <a href="wishlist.html">
                <p>My List</p>
            </a>
        </div>
    </div>
    <div class="informasi-container">
        <div class="informasi">
            <img class="informasi-image" src="assets/image/img-ikan.png">
            <div class="informasi-text">
                <div class="title-container">
                    <div class="informasi-title">
                        <p>Balistoides Conspicillum</p>
                        <p>(Ikan Kotak Tutul Putih)</p>
                    </div>
                </div>
                <div class="informasi-desc">
                    <p>Balistoides Conspicillum atau dikenal sebagai ikan kotak tutul putih (Clown Triggerfish)
                        merupakan ikan hias laut berwarna mencolok yang banyak ditemukan di terumbu karang khususnya di
                        wilayah Wallacea. Ikan ini bukan endemik darat, tetapi tersebar luas di perairan tropis dan
                        subtropis Samudra Hindia dan Pasifik bagian barat. Populasinya banyak bergantung pada kesehatan
                        terumbu karang. Perannya penting karena membantu mengontrol populasi invertebrata kecil yang
                        dapat merusak ekosistem karang. Selain itu, keberadaannya menjadi indikator kesehatan terumbu
                        dan daya tarik wisata bahari.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>