<?php
include "koneksi.php";
global $conn;
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th><th>Username</th><th>Password Hash</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['username']; ?></td>
            <td><?= $data['PASSWORD']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>