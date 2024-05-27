<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>....</title>
</head>
<body>
    <?php
    // variabel dalam php

    $txt = "Selamat datang!";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;
    
    echo "<p>Isi variabel txt adalah: $txt</p>";
    echo "<p>Isi variabel x adalah: $x</p>";
    echo "<p>Isi variabel y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "{Irma Reyta}");
    echo "<br>" . nama_konstanta;
    ?>
    
</body>
</html>
