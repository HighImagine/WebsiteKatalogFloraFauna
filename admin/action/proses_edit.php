<?php

include '../../koneksi.php';

$id = $_POST['id'];

$nama_umum = $_POST['nama_umum'];
$nama_ilmiah = $_POST['nama_ilmiah'];
$jenis = $_POST['jenis'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$gambar_lama = $_POST['gambar_lama'];


// cek kalau ada gambar baru yang diupload
if ($_FILES['gambar']['name'] != '') {

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file(
        $tmp,
        "../../uploads/spesies/" . $gambar
    );

} else {

    // pakai gambar lama
    $gambar = $gambar_lama;
}


// update data ke database
$query = mysqli_query(
    $conn,
    "UPDATE spesies SET

    nama_umum='$nama_umum',
    nama_ilmiah='$nama_ilmiah',
    jenis='$jenis',
    kategori='$kategori',
    gambar='$gambar',
    deskripsi='$deskripsi'

    WHERE id='$id'"
);


if ($query) {

    if ($jenis == 'flora') {

        header("Location: ../index.php?page=dashboard-flora");

    } else {

        header("Location: ../index.php?page=dashboard-fauna");

    }

    exit();
}