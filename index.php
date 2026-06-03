<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'Homepage';
    $css = 'css/homepage.css';
    include 'template/head.php'; ?>
</head>

<body>
    <?php include 'template/navbar.php'; ?>
    <?php if (isset($_GET['popup']) && $_GET['popup'] == 'login'): ?>
        <div class="popup-overlay">
            <div class="popup">
                <h2>Login Diperlukan</h2>
                <p>Silakan login atau register terlebih dahulu untuk mengakses fitur favorit.</p>

                <div class="popup-actions">
                    <a href="login.php" class="btn-login">
                        Login
                    </a>

                    <a href="register.php" class="btn-register">
                        Register
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="landing">
        <div class="kotak_landing">
            <div class="hero-content">
                <h2>
                    Jelajahi<br>
                    Keanekaragaman<br>
                    Wallacea
                </h2>

                <p>
                    Temukan Flora Fauna Wallacea dengan informasi lengkap dan menarik.
                </p>

                <a href="kategori.php" class="baca_sekarang">
                    Baca Sekarang
                </a>
            </div>

            <div class="gambar_kotak_landing"></div>
        </div>
        <?php if (!isset($_SESSION['username'])): ?>

            <div class="CTA-register">
                <p>
                    Login untuk menyimpan Flora Fauna favoritmu!
                </p>

                <a href="login.php" class="register-btn">
                    Login
                </a>
            </div>

        <?php endif; ?>
    </div>
    <div class="green_line_1"></div>

    <div class="recomendation">
        <div class="kotak_rekomendasi">Rekomendasi</div>
        <div class="kotak_isi_rekomendasi">

            <div class="teks_rekomendasi">
                <h3>POHON</h3>
                <p>INTSIA BIJUGA
                    <br>
                    CANARIUM INDICUM
                    <br>
                    EUCALYPTUS DEGLUPTA
                </p>
            </div>
            <div class="teks_rekomendasi">
                <h3>MAMALIA</h3>
                <a href="detail.php?id=24">ANOA DEPRESSICORNIS</a>
                <br>
                BABYROUSA BABYRUSSA
                <br>
                PTEROPUS VAMPYRUS
                </p>
            </div>
            <div class="teks_rekomendasi">
                <h3>BUNGA</h3>
                <p>ETLINGERA ELATIOR
                    <br>
                    <a href="detail.php?=1">AMORPHOPPALLUS TITANUM</a>
                    <br>
                    DENDROBIUM PHALAENOPSIS
                </p>
            </div>
            <div class="teks_rekomendasi_kanan">
                <h3>REPTIL</h3>
                <a href="detail.php?id=16">VARANUS KOMODIENSIS</a>
                <br>
                CROCODYLUS POROSUS
                <br>
                CHELONIA MYDAS
                </p>
            </div>

        </div>
    </div>

    <div class="green_line_2"></div>

    <div class="fakta_unik">

        <div class="judul_fakta_unik">Fakta Unik</div>

        <div class="all_kotak_fakta_unik">

            <div class="Kotak_fakta_unik">
                <div class="fakta-img G1_fakta_unik"></div>

                <div class="keterangan_fakta_unik">
                    <h3>Corypha Utan<br>(Pohon Palem)</h3>

                    <p>
                        * Palem raksasa ini hanya berbunga sekali seumur hidup, lalu mati.<br>
                        * Bisa tumbuh hingga 20 meter sebelum...
                        <cite>selengkapnya</cite>
                    </p>
                </div>
            </div>

            <div class="Kotak_fakta_unik">
                <div class="fakta-img G2_fakta_unik"></div>

                <div class="keterangan_fakta_unik">
                    <h3>Coelogyne Pandurata<br>(Anggrek Hitam)</h3>

                    <p>
                        * Memiliki warna gelap yang tidak biasa.<br>
                        * Hanya tumbuh di daerah hutan hujan tertentu...
                        <cite>selengkapnya</cite>
                    </p>
                </div>
            </div>

            <div class="Kotak_fakta_unik">
                <div class="fakta-img G3_fakta_unik"></div>

                <div class="keterangan_fakta_unik">
                    <h3>Diospyros Celebica<br>(Pohon Eboni)</h3>

                    <p>
                        * Kayunya sangat keras dan mahal.<br>
                        * Pertumbuhannya sangat lambat...
                        <cite>selengkapnya</cite>
                    </p>
                </div>
            </div>

            <div class="Kotak_fakta_unik">
                <div class="fakta-img G4_fakta_unik"></div>

                <div class="keterangan_fakta_unik">
                    <h3>Nepenthes Floresiana<br>(Kantong Semar)</h3>

                    <p>
                        * Hanya ada di Pulau Flores.<br>
                        * Kantongnya dapat mencerna serangga...
                        <cite>selengkapnya</cite>
                    </p>
                </div>
            </div>

            <div class="Kotak_fakta_unik">
                <div class="fakta-img G5_fakta_unik"></div>

                <div class="keterangan_fakta_unik">
                    <h3>Santalum Album<br>(Cendana)</h3>

                    <p>
                        * Ditemukan di Nusa Tenggara Timur.<br>
                        * Aromanya khas dan banyak digunakan...
                        <cite>selengkapnya</cite>
                    </p>
                </div>
            </div>

        </div>

    </div>

    <div class="flora_line">
        <div class="green_line_awal"></div>
        <div class="gray_line"></div>
        <div class="green_line_akhir"></div>
    </div>

    <div class="background_flora">

        <div class="judul_flora">FLORA</div>

        <div class="kotak_flora">
            <p>Beberapa Flora Wallacea Terkenal</p>

            <div class="pengatur_kotak_flora">
                <div class="pembentuk_flora_1 G1">
                    <p>Flamboyan</p>
                </div>
                <div class="pembentuk_flora_2 G2">
                    <p>Anggrek Serat</p>
                </div>
                <div class="pembentuk_flora_3 G3">
                    <p>Anggrek Larat</p>
                </div>
                <div class="pembentuk_flora_4 G4">
                    <p>Anggrek Hitam</p>
                </div>
                <div class="pembentuk_flora_5 G5">
                    <p>Anggrek Bulan</p>
                </div>
                <div class="pembentuk_flora_6 G6">
                    <p>Eboni</p>
                </div>
                <div class="pembentuk_flora_7 G7">
                    <p>Anggrek Bulan</p>
                </div>
            </div>

        </div>

        <?php if (!isset($_SESSION['username'])): ?>

            <div class="CTA-register">
                <p>
                    Buat akun untuk membuat koleksi flora favoritmu!
                </p>

                <a href="login.php" class="register-btn">
                    Login
                </a>
            </div>

        <?php endif; ?>

    </div>

    <div class="fauna_line">
        <div class="green_line_awal"></div>
        <div class="gray_line"></div>
        <div class="green_line_akhir"></div>
    </div>

    <div class="background_fauna">

        <div class="judul_fauna">FAUNA</div>

        <div class="kotak_fauna">
            <p>Beberapa Fauna Wallacea Terkenal</p>

            <div class="pengatur_kotak_fauna">
                <a href="detail.php?id=24" class="pembentuk_fauna_1 G1">
                    <p>Anoa</p>
                </a>
                <div class="pembentuk_fauna_2 G2">
                    <p>Babi Rusa</p>
                </div>
                <div class="pembentuk_fauna_3 G3">
                    <p>Burung Maleo</p>
                </div>
                <a href="detail.php?id=16" class="pembentuk_fauna_4 G4">
                    <p>Komodo</p>
                </a>
                <div class="pembentuk_fauna_5 G5">
                    <p>Kuskus</p>
                </div>
                <div class="pembentuk_fauna_6 G6">
                    <p>Burung Ruri</p>
                </div>
                <div class="pembentuk_fauna_7 G7">
                    <p>Kakatua Jambul</p>
                </div>
            </div>

        </div>

        <?php if (!isset($_SESSION['username'])): ?>

            <div class="CTA-register">
                <p>
                    Login untuk membuat koleksi fauna favoritmu!
                </p>

                <a href="login.php" class="register-btn">
                    Login
                </a>
            </div>

        <?php endif; ?>

    </div>

    <div class="green_line_3"></div>

    <?php include "template/footer.php"; ?>

</body>

</html>