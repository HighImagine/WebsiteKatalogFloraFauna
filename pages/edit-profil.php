<?php
include "../cek.php";
include "../koneksi.php";

$id = $_SESSION['id'];

$stmt = $conn->prepare("SELECT username, email, about, foto FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $about = $_POST['about'];
    $foto = $user['foto'];

    if ($username == '') {
        $username = $user['username'];
    }

    if (!empty($_FILES['foto']['name'])) {
        $namaFoto = $_FILES['foto']['name'];
        $tmpFoto = $_FILES['foto']['tmp_name'];

        $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp'];
        $ekstensiFoto = strtolower(pathinfo($namaFoto, PATHINFO_EXTENSION));

        if (!in_array($ekstensiFoto, $ekstensiValid)) {
            echo "Format foto harus jpg, jpeg, png, atau webp.";
            exit();
        }

        $fotoBaru = "profile_" . $id . "_" . time() . "." . $ekstensiFoto;
        $folderUpload = "../uploads/pfp/";

        move_uploaded_file($tmpFoto, $folderUpload . $fotoBaru);

        $foto = $fotoBaru;
    }
    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, about = ?, foto = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $username, $email, $about, $foto, $id);

    if ($stmt->execute()) {
        header("Location: profil.php");
        exit();
    } else {
        echo "Gagal mengubah profil.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <?php $css = "css/edit-profil.css"; ?>
    <?php $title = "Edit Profil"; ?>
    <?php include "../template/head.php"; ?>
</head>

<body>

    <div class="edit-profile-page">

        <a href="profil.php" class="back-button">←</a>

        <form class="edit-profile-card" method="POST" enctype="multipart/form-data">
            <h2>Edit Profil</h2>
            <div class="form-group">
                <label>Foto Profil</label>
                <input type="file" name="foto">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label>Tentang</label>
                <textarea name="about"></textarea>
            </div>

            <button class="save-button" type="submit" name="simpan">
                Simpan Perubahan
            </button>

        </form>

    </div>

</body>

</html>