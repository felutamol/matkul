<?php
include "koneksi.php";
global $conn;

$pesan = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($conn,
        "SELECT PASSWORD FROM users WHERE username = ?"
    );
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $hasil = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($hasil);

    if ($data && password_verify($password, $data['PASSWORD'])) {
        $pesan = "Berhasil masuk. Selamat datang, " . $username . "!";
        $status = "berhasil";
    } else {
        $pesan = "Gagal masuk. Username atau password salah.";
        $status = "gagal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="container">

        <div class="form-box">
            <h2>Login</h2>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Masuk</button>
            </form>
        </div>

        <?php if ($pesan != "") { ?>
        <div class="pesan <?= $status; ?>">
            <?= $pesan; ?>
        </div>
        <?php } ?>

    </div>
</body>
</html>