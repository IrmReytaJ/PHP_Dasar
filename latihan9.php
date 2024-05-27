<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Contoh fungsi
    function writeMsg($nama) {
        echo "selamat datang" . $nama. "<br>";
    }
    writeMsg("Ahmad"); // pemanggilan fungsi

    //fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a = $angka1 + $angka2;
        return $a; // mengirim nilai $a ke pemanggil
    }
    $hasil = tambah(5, 5);
    echo $hasil;
    ?>
</body>
</html>
