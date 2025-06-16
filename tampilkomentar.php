<!DOCTYPE html>
<html>
<head>
    <title>Data Komentar Anda</title>
</head>
<body>
    <h2><b>Data Komentar Anda</b></h2>
    <hr>
    <?php
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    // Tampilkan data
    echo "Nama Anda : $nama<br>";
    echo "Email Anda : $email<br>";
    echo "Komentar Anda : $komentar<br>";
    ?>
    <br>
    <a href="formkomentar.php">INPUT DATA LAGI</a>
</body>
</html>
