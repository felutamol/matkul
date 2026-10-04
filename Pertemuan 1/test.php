<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Praktikum 1</title>
    </head>

    <body>
        <h1>Testing</h1>
        <h2>Saya tidur cuman 7 jam</h2>

        <h1 style="background-color:DodgerBlue;">
            <font color=#11ff00>
                Hello World
            </font>
        </h1>

        <?php 
        date_default_timezone_set('Asia/Jakarta');
        echo "Semangat";
        echo date("Y/m/d H:i:s");

        for ($i=1 ;$i<= 100; $i++)
            echo "$i ";

        $angka = 1;
        $x = 1;
        while ($angka < 100) {
            echo $angka . "\n";
            $angka += $x;
            $x += 1;
        }
        $angkaa = 1;
        while ($angkaa ** 2 < 100) {
            echo ($angkaa ** 2) . " ";
            $angkaa += 1;
        }
        ?>
    </body>
</html>