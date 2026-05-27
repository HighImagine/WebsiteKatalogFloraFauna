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

if($data['jenis'] == 'flora'){
    header("Location: ../index.php?page=$from");
}
else{
    header("Location: ../index.php?page=$from");
}