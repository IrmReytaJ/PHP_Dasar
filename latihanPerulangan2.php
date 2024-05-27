
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = array(12, 13, 15, 16, 189, 346, 876, 54232, 3256);
    ?>

    <?php foreach ($angka as $nilai) : ?>
        <?php
        // Memeriksa apakah angka genap atau ganjil
        if ($nilai % 2 == 0) {
            $keterangan = "Genap";
        } else {
            $keterangan = "Ganjil";
        }
        ?>

        <p>Nomor : <?php echo $nilai; ?> <?php echo $keterangan; ?></p>
    <?php endforeach; ?>
</body>
</html>
