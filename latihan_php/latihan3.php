<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Kelipatan Bilangan Genap</h2>
    <form method="get">
        <label>Nilai awal</label><br>
        <input type="text" placeholder="Inputkan nilai awal" name="awal" required><br><br>
        <label>Nilai akhir</label><br>
        <input type="text" placeholder="Inputkan nilai akhir" name="akhir" required>
        <button>Submit</button>
    </form> <br>
    <?php
    $awal = @$_GET['awal'];
    $akhir = @$_GET['akhir'];
    for($angka=$awal; $angka<=$akhir; $angka++){
        if($angka%2==0){
        echo " ".$angka. "\t";
        }
    }
    ?>
</body>
</html>

