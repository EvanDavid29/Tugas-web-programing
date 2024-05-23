<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Menggunkan While</h2>    
    <br>
    <br>
    <?php
        $jumlah=1;
        while ($jumlah <= 100) {
            echo "Saya bisa membuat perulangan sebanyak : ".$jumlah++."<br><br>";
        }
    ?>
    <br><br>
    <h2>Menggunakan Do while</h2>
    <br>
    <?php
        $jumlah2=1; // Perbaiki variabel dari $jumalah2 menjadi $jumlah2
        do {
            echo "Saya bisa membuat perulangan sebanyak : ".$jumlah2++."<br>"."<br>";
        } 
        while ($jumlah2 <= 100); // Perbaiki kondisi dari 1 menjadi 100
            
    ?>
</body>
</html>
