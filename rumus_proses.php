<?php
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$rumus = $_POST['rumus'];

echo "<h2>HASIL HITUNG RUMUS</h2>";

echo "Nilai a adalah = $nilai1<br>";
echo "Nilai b adalah = $nilai2<br>";

if ($nilai1 == 0 && $nilai2 == 0) {
    echo "Tidak ada hasil perhitungan.";
} else {
    if ($rumus == "segitiga") {
        $hasil = 0.5 * $nilai1 * $nilai2;
        echo "Rumus Yang Dipilih adalah = Segitiga<br>";
    } elseif ($rumus == "persegi_panjang") {
        $hasil = $nilai1 * $nilai2;
        echo "Rumus Yang Dipilih adalah = Persegi Panjang<br>";
    } else {
        echo "Tidak ada rumus yang dipilih.<br>";
        $hasil = 0;
    }
    echo "Hasil Perhitungan Rumus = $hasil";
}
?>
