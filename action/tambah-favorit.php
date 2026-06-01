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
    INSERT IGNORE INTO favorit (user_id, spesies_id)
    VALUES (?, ?)
");

$stmt->bind_param("ii", $user_id, $spesies_id);
$stmt->execute();

header("Location: ../detail.php?id=" . $spesies_id);
exit();
?>