<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan8</title>
</head>
<body>
    <?php
    
    // data kelas dengan array 2 dimensi
    $array = array(
        "1C" => array("udin", "ismail", "adi"),
        "1D" => array("lukman", "fajri", "mahmud")
    );

    // menampilkan data array
    print_r($array);
    echo "<br>";

    // menampilkan kelas 1D
    print_r($array['1D']);
    echo "<br>";

    // menampilkan kelas 1D dengan index 0
    echo $array['1D'][0];
    echo "<br>";

    // data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" => ["udin", "ismail", "adi"],
        "1D" => ["lukman", "fajri", "mahmud"]
    ];
    ?>
</body>
</html>