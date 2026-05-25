<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "
    SELECT * FROM flora_fauna
    WHERE id = $id
");

$data = mysqli_fetch_assoc($query);

?>