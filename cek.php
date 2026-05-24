<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// cek level
if (isset($level_akses)) {
    if ($_SESSION['level'] != $level_akses) {
        echo "Akses Ditolak.";
        exit();
    }
}
?>