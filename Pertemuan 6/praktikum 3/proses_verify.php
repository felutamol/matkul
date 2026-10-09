<?php
    include 'koneksi.php';
    global $conn;
    global $database;
    $username = $_POST['username'];
    $password_input = $_POST['password'];
    $hash_database = $data['password'];

    if (password_verify($password_input, $hash_database)) {
        echo "Login berhasil";
    } else {
        echo "Login gagal";
    }
?>