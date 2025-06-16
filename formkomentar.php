<!DOCTYPE html>
<html>
<head>
    <title>BUKU TAMU</title>
</head>
<body>
    <h2><b>BUKU TAMU</b></h2>
    <p>Komentar dan Saran Anda Sangat Kami Butuhkan<br>
    Untuk Meningkatkan Kualitas Situs Kami</p>
    <hr>
    <form action="tampilkomentar.php" method="post">
        <table>
            <tr>
                <td>Nama Anda</td>
                <td>: <input type="text" name="nama" value="Bintang Galaxy"></td>
            </tr>
            <tr>
                <td>Email Anda</td>
                <td>: <input type="email" name="email" value="bintang@gmail.com"></td>
            </tr>
            <tr>
                <td>Komentar Anda</td>
                <td>: <textarea name="komentar" rows="4" cols="30">webnya bagus, bisa ditambahkan konten lain yang menarik</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Kirim">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
