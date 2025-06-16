<!DOCTYPE html>
<html>
<head>
    <title>Volume Kubus</title>
</head>
<body>
    <?php
    // Variabel teks
    $teks1 = "Belajar Menghitung";
    $teks2 = "Volume Kubus";

    // Menggabungkan teks
    echo $teks1 . " . " . $teks2 . "<br>";

    // Panjang sisi kubus
    $sisi = 15;

    // Menghitung volume
    $volume = $sisi * $sisi * $sisi;

    // Menampilkan hasil
    echo "Panjang Sisi Kubus = $sisi<br>";
    echo "Volume Kubus = $volume cm3";
    ?>
</body>
</html>
