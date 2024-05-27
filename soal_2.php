
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Array poin siswa
    $siswa = array(
        array("nama" => "Adi", "poin" => 75),
        array("nama" => "Joni", "poin" => 80),
        array("nama" => "Jihan", "poin" => 65),
        array("nama" => "Aya", "poin" => 70),
        array("nama" => "Ita", "poin" => 85),
        array("nama" => "Budi", "poin" => 90),
        array("nama" => "Tini", "poin" => 95),
        array("nama" => "Sari", "poin" => 65),
    );

    // a) Tampilkan poin siswa dengan nomor urut 5
    echo "a) Poin siswa dengan nomor urut 5: " . $siswa[4]['poin'] . "<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    echo "b) Nama siswa yang memiliki poin 90: ";
    foreach ($siswa as $data) {
        if ($data['poin'] == 90) {
            echo $data['nama'] . ", ";
        }
    }
    echo "<br>";

    // c) Tampilkan semua nama siswa yang memiliki poin 100
    echo "c) Nama siswa yang memiliki poin 100: ";
    $ada_siswa_poin_100 = false;
    foreach ($siswa as $data) {
        if ($data['poin'] == 100) {
         echo $data['nama'] . ", ";
         $ada_siswa_poin_100 = true;
        }
    }
    if (!$ada_siswa_poin_100) {
        echo "Tidak ada";
    }
?>

</body>
</html>
