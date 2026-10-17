<?php
include "koneksi.php";
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn,
        "INSERT INTO users (username, PASSWORD)
        VALUES (?, ?)"
    );
    mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
    mysqli_stmt_execute($stmt);
}

$result = mysqli_query($conn,
    "SELECT * FROM users ORDER BY id ASC"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="container wide">

        <div class="form-box">
            <h2>Register User</h2>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Daftar</button>
            </form>
        </div>

        <div class="table-box">
            <h2>Daftar User</h2>
            <table>
                <tr>
                    <th>No</th><th>Username</th><th>Password Hash</th>
                </tr>

                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['PASSWORD']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>