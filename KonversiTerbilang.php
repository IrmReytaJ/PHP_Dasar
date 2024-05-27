
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <?php
    // Fungsi untuk mengonversi angka menjadi terbilang
    function terbilang($angka) {
        switch ($angka) {
            case 1:
                return "satu";
                break;
            case 2:
                return "dua";
                break;
            case 3:
                return "tiga";
                break;
            case 4:
                return "empat";
                break;
            case 5:
                return "lima";
                break;
            case 6:
                return "enam";
                break;
            case 7:
                return "tujuh";
                break;
            case 8:
                return "delapan";
                break;
            case 9:
                return "sembilan";
                break;
            default:
                return "Tidak valid";
        }
    }

    // Mengonversi angka 1-9 menjadi huruf
    for ($i = 1; $i <= 9; $i++) {
        echo "Angka $i dalam terbilang adalah: " . terbilang($i) . "<br>";
    }
    ?>
</body>
</html>
