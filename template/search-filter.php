<form method="GET" class="search-filter">
    <input type="text" name="search" placeholder="Cari nama spesies..."
        value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">

    <select name="jenis">
        <option value="">Semua Jenis</option>
        <option value="flora" <?= ($_GET['jenis'] ?? '') == 'flora' ? 'selected' : '' ?>>
            Flora
        </option>
        <option value="fauna" <?= ($_GET['jenis'] ?? '') == 'fauna' ? 'selected' : '' ?>>
            Fauna
        </option>
    </select>

    <select name="sort">
        <option value="terbaru" <?= ($_GET['sort'] ?? '') == 'terbaru' ? 'selected' : '' ?>>
            Terbaru
        </option>
        <option value="terlama" <?= ($_GET['sort'] ?? '') == 'terlama' ? 'selected' : '' ?>>
            Terlama
        </option>
        <option value="az" <?= ($_GET['sort'] ?? '') == 'az' ? 'selected' : '' ?>>
            Nama A-Z
        </option>
        <option value="za" <?= ($_GET['sort'] ?? '') == 'za' ? 'selected' : '' ?>>
            Nama Z-A
        </option>
    </select>

    <button type="submit">Cari</button>
</form>