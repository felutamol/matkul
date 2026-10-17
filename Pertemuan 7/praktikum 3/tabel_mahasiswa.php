<?php
include "koneksi.php";
global $conn;

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];

    $stmt = mysqli_prepare($conn, 
    "INSERT INTO mahasiswa (nrp, nama, prodi, email)
    VALUES (?, ?, ?, ?)"
    );
    mysqli_stmt_bind_param($stmt, "ssss", $nrp, $nama, $prodi, $email);
    mysqli_stmt_execute($stmt);
}
$result = mysqli_query($conn,
"SELECT * FROM mahasiswa ORDER BY id ASC"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="loginapp.css">
</head>
<body>
    <div class="container wide">

        <div class="form-box">
            <h2>Tambah Data Mahasiswa</h2>
            <form method="POST">
                <input type="text" name="nrp" placeholder="NRP" required>
                <input type="text" name="nama" placeholder="Nama" required>
                <input type="text" name="prodi" placeholder="Prodi" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Tambah</button>
            </form>
        </div>

        <div class="table-box">
            <h2>Daftar Mahasiswa</h2>
            <table>
                <tr>
                    <th>No</th><th>NRP</th><th>Nama</th><th>Prodi</th><th>Email</th>
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