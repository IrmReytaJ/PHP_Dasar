<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $namaBuah = array("Nanas", "Jeruk", "Apel", "Melon", "Mangga");
    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

    // tampilkan Mangga
    echo "Saya suka " . $namaBuah[4] . ".<br>";
    // tampilkan Jeruk
    echo "Saya suka " . $namaBuah[1] . ".<br>";
    // tampilkan Apel
    echo "Saya suka " . $namaBuah[2] . ".<br>";
    // tampilkan Melon
    echo "Saya suka " . $namaBuah[3] . ".<br>";

    // array dengan spesifik index
    $umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "40 Tahun");
    $umur['Ahmad'] = "50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi'] . ".<br>";

    // tampilkan semua umur
    foreach ($umur as $nama => $usia) {
        echo "Umur " . $nama . " adalah " . $usia . ".<br>";
    }
    ?>
</body>
</html>
