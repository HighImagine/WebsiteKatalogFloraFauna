<?php

include '../koneksi.php';

$id = $_GET['id'];
$jenis = $_GET['jenis'] ?? '';
$query = mysqli_query(
    $conn,
    "SELECT * FROM spesies WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>

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

        input,
        select,
        textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            resize: vertical;
        }

        .gambar-lama {
            width: 150px;
            border-radius: 8px;
        }

        .input-gambar {
            display: flex;
            flex-direction: column;
            gap: 8px;
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
            cursor: pointer;
        }

        .file-name {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>

    <h1>Edit Data Spesies</h1>

    <form action="/website/admin/action/proses_edit.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <input type="hidden" name="gambar_lama" value="<?= $data['gambar']; ?>">

        <label>Nama Umum</label>
        <input type="text" name="nama_umum" value="<?= $data['nama_umum']; ?>" required>

        <label>Nama Ilmiah</label>
        <input type="text" name="nama_ilmiah" value="<?= $data['nama_ilmiah']; ?>" required>

        <input type="hidden" name="jenis" value="<?= $data['jenis']; ?>">

        <p>
            Jenis:
            <b><?= ucfirst($data['jenis']); ?></b>
        </p>


        <label>Kategori</label>
        <select name="kategori" required>

            <?php if ($data['jenis'] == 'flora'): ?>

                <option value="pohon" <?= ($data['kategori'] == 'pohon') ? 'selected' : ''; ?>>
                    Pohon
                </option>

                <option value="bunga" <?= ($data['kategori'] == 'bunga') ? 'selected' : ''; ?>>
                    Bunga
                </option>

                <option value="tanaman-buah" <?= ($data['kategori'] == 'tanaman-buah') ? 'selected' : ''; ?>>
                    Tanaman Buah
                </option>

                <option value="tanaman-obat" <?= ($data['kategori'] == 'tanaman-obat') ? 'selected' : ''; ?>>
                    Tanaman Obat
                </option>

            <?php elseif ($data['jenis'] == 'fauna'): ?>

                <option value="mamalia" <?= ($data['kategori'] == 'mamalia') ? 'selected' : ''; ?>>
                    Mamalia
                </option>

                <option value="burung" <?= ($data['kategori'] == 'burung') ? 'selected' : ''; ?>>
                    Burung
                </option>

                <option value="ikan" <?= ($data['kategori'] == 'ikan') ? 'selected' : ''; ?>>
                    Ikan
                </option>

                <option value="reptil" <?= ($data['kategori'] == 'reptil') ? 'selected' : ''; ?>>
                    Reptil
                </option>

            <?php endif; ?>

        </select>

        <label>Gambar Saat Ini</label>

        <img src="uploads/spesies/<?= $data['gambar']; ?>" class="gambar-lama">

        <div class="input-gambar">

            <label>Ganti Gambar (Opsional)</label>

            <div class="file-wrapper">

                <input type="file" name="gambar" accept="image/*" id="fileInput">

                <label for="fileInput" class="file-label">
                    Pilih Gambar
                </label>

                <span class="file-name">
                    Tidak ada file dipilih
                </span>

            </div>
        </div>

        <label>Deskripsi</label>

        <textarea name="deskripsi" rows="8" required><?= $data['deskripsi']; ?></textarea>

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

    <script>
        document.getElementById('fileInput').addEventListener('change', function (e) {

            var fileName = e.target.files[0] ?
                e.target.files[0].name :
                'Tidak ada file dipilih';

            document.querySelector('.file-name').textContent = fileName;

        });
    </script>

</body>

</html>