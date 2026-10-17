<?php
    include 'koneksi.php';
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($conn, 
    "SELECT * FROM users WHERE username = ?"
    );
    mysqli_stmt_bind_param($stmt, "s", $username); 
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    if ($data && password_verify($password, $data['PASSWORD'])) {
        echo "Login berhasil";
    } else {
        echo "Username atau password salah";
    }
?>