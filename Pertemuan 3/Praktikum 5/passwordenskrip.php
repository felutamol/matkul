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
        $username = $_POST['username'];

        $passwordku = "5b871d694ec53462b5a645f793e22e40";
        $usernameku = "Cholis";

        if ($passwordku==$passwordenkrip && $username==$usernameku)
        echo "Anda berhak masuk";
        else
            echo "Password / Username anda salah";
        ?>
    </body>
</html>