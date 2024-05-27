<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Operators logika yang bisa digunakan
    * ==    Sama Dengan        $x == $y
    * ===   Identical          $x === $y
    * !=    Tidak sama dengan  $x != $y
    * <>    Tidak sama dengan  $x <> $y
    * !==   Not identical      $x !== $y
    * >     Lebih besar dari   $x > $y
    * <     Kurang dari        $x < $y
    * >=    Lebih besar atau sama dengan    $x >= $y
    * <=    Kurang dari atau sama dengan    $x <= $y
    * <=>   Spaceship   $x <=> $y
    */

    $t = date("H"); // mendapatkan jam dengan format 1-24
    echo "If ";
    if ($t < 16) {
        echo "Selamat Siang";
    }

    $t = date("H ");
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "selamat siang!";
    } else {
        echo "Selamat malam!";
    }


    $t = date ("H "); //mendapatkan jam dengan format 1-24
    echo "<br> Nested If <br>";
    if ($t < 12) {
        echo "Selamat Pagi!";
    }elseif ($t < 16) {
        echo "Selamat Sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>