<?php
include __DIR__ . '/../../koneksi.php';

$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($conn, $_GET['keyword']) : '';

// cari data
$query = "SELECT * FROM spesies 
          WHERE nama_umum LIKE '%$keyword%' 
             OR nama_ilmiah LIKE '%$keyword%'
          ORDER BY nama_umum ASC";

$result = mysqli_query($conn, $query);
?>

<style>
    .hasil-cari {
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 20px;
    }

    /* Tombol kembali ke dashboard */
    .btn-back {
        align-self: flex-start;
        margin-bottom: 20px;
        padding: 10px 20px;
        background: #b9ff66;
        color: black;
        text-decoration: none;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-back:hover {
        background: #a0e055;
    }

    .card-data {
        background: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        gap: 20px;
        align-items: center;
        width: 100%;
        max-width: 800px;
    }

    .card-data img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px;
    }

    .info-data h4 {
        margin: 0 0 5px 0;
    }

    .info-data p {
        margin: 0;
        color: #666;
        font-size: 14px;
    }

    .badge {
        display: inline-block;
        padding: 3px 8px;
        border-radius: 10px;
        font-size: 11px;
        margin-top: 5px;
    }

    .badge-flora {
        background: #28a745;
        color: white;
    }

    .badge-fauna {
        background: #17a2b8;
        color: white;
    }

    .btn-detail {
        margin-left: auto;
        padding: 8px 15px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-detail:hover {
        background: #0056b3;
    }

    .hasil-kosong {
        text-align: center;
        padding: 50px;
        background: white;
        border-radius: 10px;
        width: 100%;
        max-width: 800px;
    }
</style>

<div class="hasil-cari">
    <a href="admin/index.php?page=dashboard-utama" class="btn-back">
        ← Kembali
    </a>

    <h2>Hasil Pencarian: "<?php echo htmlspecialchars($keyword); ?>"</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <p>Ditemukan <?php echo mysqli_num_rows($result); ?> data</p>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card-data">
                <?php if ($row['gambar']): ?>
                    <img src="uploads/spesies/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_umum']; ?>">
                <?php else: ?>
                    <img src="assets/image/no-image.svg" alt="No Image">
                <?php endif; ?>

                <div class="info-data">
                    <h4><?php echo htmlspecialchars($row['nama_umum']); ?></h4>
                    <p><i><?php echo htmlspecialchars($row['nama_ilmiah']); ?></i></p>
                    <span class="badge <?php echo $row['jenis'] == 'flora' ? 'badge-flora' : 'badge-fauna'; ?>">
                        <?php echo ucfirst($row['jenis']); ?> - <?php echo htmlspecialchars($row['kategori']); ?>
                    </span>
                </div>

                <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn-detail">Lihat Detail</a>
            </div>
        <?php endwhile; ?>

    <?php else: ?>
        <div class="hasil-kosong">
            <p>Tidak ada data yang cocok dengan kata "<?php echo htmlspecialchars($keyword); ?>"</p>
        </div>
    <?php endif; ?>
</div>