<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Deklarasi gaji pokok dan tunjangan jabatan
    $gaji_pokok = 3250000;
    $tunjangan_jabatan = 1200000;

    // Menghitung gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

    // Menghitung pajak penghasilan (10% dari gaji kotor)
    $pajak = 0.10 * $gaji_kotor;

    // Menghitung gaji bersih
    $gaji_bersih = $gaji_kotor - $pajak;

    // Menampilkan hasil perhitungan
    echo "Gaji bersih yang diterima Obi setiap bulannya adalah: Rp. " . number_format($gaji_bersih, 2, ',', '.') . ",-";
?>

</body>
</html>