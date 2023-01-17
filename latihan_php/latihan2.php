<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mengecek Predikat Nilai</h2>
    <form method="get">
        <input type="text" name="angka" placeholder="Masukkan nilai anda" required>
        <button>Submit</button>
    </form>

    <?php
        $angka = @$_GET['angka'];

        if($angka > 90){
            echo "Predikat nilai A+";
        }else if($angka > 80 && $angka <= 90){
            echo "Predikat nilai A";
        }else if($angka > 70 && $angka <= 80){
            echo "Predikat nilai B+";
        }else if($angka > 60 && $angka <= 70){
            echo "Predikat nilai B";
        }else if($angka > 50 && $angka <= 60){
            echo "Predikat nilai C+";
        }else if($angka > 40 && $angka <= 50){
            echo "Predikat nilai C";
        }else if($angka > 30 && $angka <= 40){
            echo "Predikat nilai D";
        }else{
            echo "Predikat nilai E";
        }
    ?>
</body>
</html>