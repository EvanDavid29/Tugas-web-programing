<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jeniskel=$_POST['jeniskel'];
    $pekerjaan=$_POST['pekerjaan'];
    $hobi1=$_POST['hobi1'];
    $hobi2=$_POST['hobi2'];
    $hobi3=$_POST['hobi3'];
    ?>
    <table border=1 bgcolor="cyan">
        <tr>
            <td collspan=2 align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
        <th>Nama</th>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
        <th>Pekerjaan</th>
        <td><?php echo $pekerjaan; ?></td>
    </tr>
    <tr>
        <th>Hobi</th>
        <td>
            <ul>
                <li><?php echo $hobi1; ?></li>
                <li><?php echo $hobi2; ?></li>
                <li><?php echo $hobi3; ?></li>
            </ul>
        </td>
    </tr>      
    </table>
    <a href="form.php">Input Data Lagi</a>
</body>
</html>