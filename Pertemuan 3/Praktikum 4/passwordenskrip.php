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

        $username = $_POST['username'];
        $usernameku = "Cholis";

        if ($username==$usernameku)
        echo "Anda berhak masuk";
        else
            echo "Username anda salah";
        ?>
    </body>
</html>