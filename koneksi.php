<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_website"
);

if(!$conn){
    die("Koneksi gagal");
}