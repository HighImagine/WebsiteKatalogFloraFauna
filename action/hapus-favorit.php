<?php
session_start();
include "../koneksi.php";
include "../cek.php";

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit();
}

$from = $_GET['from'] ?? 'detail';
$user_id = $_SESSION['id'];
$spesies_id = $_GET['id'] ?? null;

$stmt = $conn->prepare("
    DELETE FROM favorit
    WHERE user_id = ? AND spesies_id = ?
");

$stmt->bind_param("ii", $user_id, $spesies_id); // ii berarti 2 parameter bertipe integer
$stmt->execute();

if ($from == "favorit") {
    header("Location: ../pages/favorit.php");
} else {
    header("Location: ../detail.php?id=" . $spesies_id);
}
exit();
?>