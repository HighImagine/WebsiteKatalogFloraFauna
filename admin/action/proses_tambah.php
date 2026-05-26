<?php

include '../../koneksi.php';

$nama_umum = $_POST['nama_umum'];
$nama_ilmiah = $_POST['nama_ilmiah'];
$jenis = $_POST['jenis'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file(
    $tmp,
    "../../uploads/spesies/" . $gambar
);

$query = mysqli_query($conn, "
    INSERT INTO spesies
    (
        nama_umum,
        nama_ilmiah,
        jenis,
        kategori,
        gambar,
        deskripsi
    )
    VALUES
    (
        '$nama_umum',
        '$nama_ilmiah',
        '$jenis',
        '$kategori',
        '$gambar',
        '$deskripsi'
    )
");

if($query){
    header("Location: ../index.php?page=dashboard-utama");
}