<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>
<body bgcolor="green">
    <form action="form_output.php" method="post">
        <b>Pengolahan Data Mahasiswa</b>
        <br>
        <pre>
            nama : <input type="text" name="nama" size="25" maxlength="50">
            alamat : <input type="text" name="alamat" size="25" maxlength="50">
        </pre>
        Jenis kelamin :
        <input type="radio" name="jeniskel" value="laki-laki">Laki-Laki
        <input type="radio" name="jeniskel" value="perempuan">perempuan
        <p>
            pekerjaan :
        <select name="pekerjaan">
            <option value="-pilih-">-pilih-
            <option value="Pelajar">Pelajar
            <option value="Karyawan">Karyawan
            <option value="Wirausaha">Wirausaha
            <option value="lain-lain">lain-lain
        </select>
        <p>
            hobi :
            <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
            <input type="checkbox" name="hobi1" value="Musik">Musik
            <input type="checkbox" name="hobi1" value="Jalan-jalan">Jalan-jalan
        </p>
        <p>
            <input type="submit" value="kirim"><input type="reset" value="batal">
        </p>
    </form>
</body>
</html>