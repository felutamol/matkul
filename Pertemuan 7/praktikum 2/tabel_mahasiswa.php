<?php
include "koneksi.php";
global $conn;
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="container">
        <div class="table-box">
            <table>
                <tr>
                    <th>ID</th><th>NRP</th><th>Nama</th><th>Prodi</th><th>Email</th>
                </tr>

                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['nrp']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['prodi']; ?></td>
                    <td><?= $data['email']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>