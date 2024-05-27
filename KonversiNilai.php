
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Huruf    Nilai
        C    = 0    -> 59
        BC   = 60   -> 69
        B    = 70   -> 79
        AB   = 80   -> 89
        A    = 90   -> 100 */

    // Deklarasi variabel nilai
    $nilai = 75;

    // Konversi nilai angka ke huruf
    if ($nilai >= 90 && $nilai <= 100) {
        $nilai_huruf = "A";
    } elseif ($nilai >= 80 && $nilai < 90) {
        $nilai_huruf = "AB";
    } elseif ($nilai >= 70 && $nilai < 80) {
        $nilai_huruf = "B";
    } elseif ($nilai >= 60 && $nilai < 70) {
        $nilai_huruf = "BC";
    } else {
        $nilai_huruf = "C";
    }

    // Menampilkan hasil konversi
    echo "Nilai angka $nilai setara dengan nilai huruf $nilai_huruf";
    ?>
</body>
</html>
