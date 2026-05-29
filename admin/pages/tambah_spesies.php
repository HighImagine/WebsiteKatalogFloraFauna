<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <style>
        * {
            font-family: 'roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
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

        label {
            font-weight: 500;
            color: #555;
        }

        button {
            padding: 10px 15px;
            background-color: #b9ff66;
            color: black;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }

        button:hover {
            background-color: #a0e055;
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            resize: vertical;
        }

        .input-gambar {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .input-gambar label {
            font-weight: 500;
            font-size: 14px;
        }

        .file-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        #fileInput {
            display: none;
        }

        .file-label {
            background-color: #f0f0f0;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .file-label:hover {
            background-color: #bbb;
        }

        .file-name {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<?php $jenis = $_GET['jenis'] ?? ''; ?>

<body>
    <h1>Tambah Data Spesies</h1>
    <form action="admin/action/proses_tambah.php" method="POST" enctype="multipart/form-data">

        <label>Nama Umum</label>
        <input type="text" name="nama_umum" required>

        <label>Nama Ilmiah</label>
        <input type="text" name="nama_ilmiah" required>

        <input type="hidden" name="jenis" value="<?= $jenis; ?>">

        <p>
            Jenis:
            <b><?= ucfirst($jenis); ?></b>
        </p>

        <label>Kategori</label>

        <select name="kategori" required>

            <option value=""></option>

            <?php if ($jenis == 'flora'): ?>

                <option value="pohon">Pohon</option>
                <option value="bunga">Bunga</option>
                <option value="tanaman-buah">Tanaman Buah</option>
                <option value="tanaman-obat">Tanaman Obat</option>

            <?php elseif ($jenis == 'fauna'): ?>

                <option value="mamalia">Mamalia</option>
                <option value="burung">Burung</option>
                <option value="ikan">Ikan</option>
                <option value="reptil">Reptil</option>

            <?php endif; ?>

        </select>

        <div class="input-gambar">
            <label>Gambar</label>
            <div class="file-wrapper">
                <input type="file" name="gambar" accept="image/*" id="fileInput" required>
                <label for="fileInput" class="file-label">Pilih Gambar</label>
                <span class="file-name">Tidak ada file dipilih</span>
            </div>
        </div>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="8" required></textarea>

        <button type="submit">Simpan</button>
    </form>

    <script>
        document.getElementById('fileInput').addEventListener('change', function (e) {
            var fileName = e.target.files[0] ? e.target.files[0].name : 'Tidak ada file dipilih';
            document.querySelector('.file-name').textContent = fileName;
        });
    </script>
</body>

</html>