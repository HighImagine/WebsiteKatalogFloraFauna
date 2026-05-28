<?php

include __DIR__ . '/../../koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT jenis FROM spesies WHERE id='$id'"
    )
);

mysqli_query(
    $conn,
    "DELETE FROM spesies WHERE id='$id'"
);

$from = $_GET['from'];
echo $from;
header("Location: ../index.php?page=dashboard-" . $data['jenis']);