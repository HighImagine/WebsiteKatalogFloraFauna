<html>
<?php
include '../../template/head.php';
?>
<head>
    <title>Tambah Data</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<form action="admin/action/proses_tambah.php" method="POST" enctype="multipart/form-data">

    <label>Nama Umum</label>
    <input type="text" name="nama_umum" required>

    <label>Nama Ilmiah</label>
    <input type="text" name="nama_ilmiah" required>

    <label>Jenis</label>
    <select name="jenis" required>
        <option value="">-- Pilih Jenis --</option>
        <option value="flora">Flora</option>
        <option value="fauna">Fauna</option>
    </select>

    <label>Kategori</label>
    <select name="kategori" required>
        <option value="">-- Pilih Kategori --</option>

        <optgroup label="Flora">
            <option value="pohon">Pohon</option>
            <option value="bunga">Bunga</option>
            <option value="tanaman-buah">Tanaman Buah</option>
            <option value="tanaman-obat">Tanaman Obat</option>
        </optgroup>

        <optgroup label="Fauna">
            <option value="mamalia">Mamalia</option>
            <option value="burung">Burung</option>
            <option value="ikan">Ikan</option>
            <option value="reptil">Reptil</option>
        </optgroup>
    </select>

    <label>Gambar</label>
    <input type="file" name="gambar" accept="image/*" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="8" required></textarea>

    <button type="submit">Simpan</button>

</form>

</html>