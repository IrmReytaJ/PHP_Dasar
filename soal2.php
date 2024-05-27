<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Jumlah uang yang akan diambil oleh Ani
    $jumlah_uang = 1387500;

    // Daftar pecahan uang yang berlaku
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    // Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang yang diperoleh Ani
    $banyak_pecahan = array();

    // Menghitung banyaknya masing-masing pecahan uang
    foreach ($pecahan as $nilai) {
    // Menghitung jumlah pecahan uang yang diperoleh Ani
    $jumlah_pecahan = floor($jumlah_uang / $nilai);
    
    // Menyimpan jumlah pecahan uang ke dalam array
    $banyak_pecahan[$nilai] = $jumlah_pecahan;
    
    // Mengurangi jumlah uang dengan nilai pecahan yang sudah dihitung
    $jumlah_uang -= $jumlah_pecahan * $nilai;
}

    // Menampilkan banyaknya masing-masing pecahan uang yang diperoleh Ani
    echo "Banyaknya masing-masing pecahan uang yang diperoleh Ani dari Bank:<br>";
    foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah . " lembar<br>";
}
?>

</body>
</html>