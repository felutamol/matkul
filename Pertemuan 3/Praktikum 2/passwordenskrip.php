<!DOCTYPE html>
<html>
    <head>
        <title>Input Form</title>
    </head>
    <body>
        <h2>Keterangan Login</h2>
        <?php 
        echo "Username = $_POST[username] <br>";
        echo "Password = $_POST[password] <br>";
        $passwordenkrip = md5($_POST['password']);
        echo "Password Enkrip = $passwordenkrip";
        ?>
    </body>
</html>