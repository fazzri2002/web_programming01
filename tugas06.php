<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="Tugas06Proses.php" method="post">
        <p>Isi Data Dibawah ini :</p>
        Nama<br>
        <input type="text" name="nama"><br><br>

        Alamat<br>
        <textarea name="alamat" rows="3" cols="40"></textarea><br><br>

        Tempat Lahir<br>
        <input type="text" name="tempat_lahir"><br><br>

        Tanggal Lahir<br>
        <input type="text" name="tanggal_lahir"><br><br>

        Jenis Kelamin<br>
        <input type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br><br>

        Pendidikan<br>
        <select name="pendidikan">
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
        </select><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>