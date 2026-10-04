<?php
    include 'koneksi.php';
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users " .
        "WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $data = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $data['username'];
        header("Location: dashboard.php");
    } else {
        echo "
        <!DOCTYPE html>
        <html>
            <head>
                <title>Login Gagal</title>
                <link rel='stylesheet' href='loginapp.css'>
            </head>
            <body>
                <div class='container'>
                    Username atau password salah!
                    <br><a href='login.html'>Coba lagi</a>
                </div>
            </body>
        </html>";
    }
?>