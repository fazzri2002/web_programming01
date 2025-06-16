<?php
$klasifikasi_usia = [
    "Usia muda"       => "25-44 tahun",
    "Usia paruh baya" => "44-60 tahun",
    "Usia tua"        => "60-75 tahun",
    "Usia pikun"      => "75-90 tahun",
    "Manula"          => "di atas 90 tahun"
];

function cariKategoriUsia($usia) {
    if ($usia >= 25 && $usia < 44) {
        return "Usia muda";
    } elseif ($usia >= 44 && $usia < 60) {
        return "Usia paruh baya";
    } elseif ($usia >= 60 && $usia < 75) {
        return "Usia tua";
    } elseif ($usia >= 75 && $usia <= 90) {
        return "Usia pikun";
    } elseif ($usia > 90) {
        return "Manula";
    } else {
        return "Usia di bawah klasifikasi WHO";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klasifikasi Usia WHO</title>
</head>
<body>

    <h3>Cari Kategori Usia Anda</h3>
    <form method="post">
        Masukkan usia Anda: <input type="number" name="usia" required>
        <button type="submit">Cek Kategori</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usia = (int)$_POST["usia"];
        $kategori = cariKategoriUsia($usia);

        echo "<hr>";
        echo "<h2>Hasil Klasifikasi Usia</h2>";
        echo "<p><strong>Usia Anda:</strong> $usia tahun</p>";
        echo "<p><strong>Kategori:</strong> $kategori</p>";

        echo "<h3>Daftar Klasifikasi Usia WHO</h3><ul>";
        foreach ($klasifikasi_usia as $k => $r) {
            echo "<li><strong>$k:</strong> $r</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
