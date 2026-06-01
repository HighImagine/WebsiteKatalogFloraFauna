<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit();
}

$user_id = $_SESSION['id'];
$spesies_id = $_GET['id'];

$stmt = $conn->prepare("
    DELETE FROM favorit
    WHERE user_id = ? AND spesies_id = ?
");

$stmt->bind_param("ii", $user_id, $spesies_id); // ii berarti 2 parameter bertipe integer
$stmt->execute();

header("Location: ../detail.php?id=" . $spesies_id); // diarahkan kembali ke halaman detail.php
exit();
?>