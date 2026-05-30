<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'user';

    // cek username
    $cek = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $cek->bind_param("s", $username);
    $cek->execute();

    $result = $cek->get_result();

    // kalau username sudah ada
    if ($result->num_rows > 0) {
        include 'template/head.php';

        echo '
        <body>

        <script>
            Swal.fire({
                icon: "error",
                title: "Username Sudah Terdaftar",
                text: "Silakan gunakan username lain.",
                confirmButtonText: "Kembali",
                color: "#222",
                confirmButtonColor: "#b9ff66",
                background: "#fef9f2"
            }).then(() => {
                window.history.back();
            });
        </script>

        </body>
        </html>
';

        exit;

    } else {

        // hash password
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        // simpan ke database
        $stmt = $conn->prepare("
            INSERT INTO users (username, password, level)
            VALUES (?, ?, ?)
        ");

        $stmt->bind_param(
            "sss",
            $username,
            $hash_password,
            $level
        );

        if ($stmt->execute()) {

            header("Location: login.php");
            exit;

        } else {

            echo "Error: " . $stmt->error;

        }
    }
}
?>