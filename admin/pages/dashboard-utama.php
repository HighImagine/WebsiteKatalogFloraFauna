<div class="selamat-datang-text">
    <h3 style="font-weight: 500;">
        Selamat Datang Kembali,
        <?= $_SESSION['username']; ?>
    </h3>

    <p>Dashboard</p>
</div>

<div class="tambah-data">
    <a href="index.php?page=tambah">
        <button class="tambah-button">
            <img src="assets/image/icon-dataDitambahkan.png" width="20" style="margin-right:5px;">

            Tambah Data
        </button>
    </a>
</div>