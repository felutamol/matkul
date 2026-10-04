<!DOCTYPE html>
<html>
    <head>
        <title>Input Form</title>
    </head>
    <body>
        <h2>Daftar MHS</h2>
        <table border="1">
            <tr>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>
                    <?php echo $_POST['username']; ?>
                </td>
                <td>
                    <?php echo $_POST['password']; ?>
                </td>
            </tr>
        </table>
    </body>
</html>