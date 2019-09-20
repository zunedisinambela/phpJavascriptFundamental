<?php
 // Pengulangan pada array
// for / foreach
$angka = [3, 2, 15, 20, 11, 77, 89];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Pengulangan pada Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both
        }
    </style>
</head>

<body>
    <h1>Cara Pertama Menggunakan For</h1>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
    <div class="kotak"> <?php echo $angka[$i]; ?> </div>
    <?php endfor; ?>
    <div class="clear"></div>

    <hr>

    <h1>Cara Kedua Menggunakan Foreach</h1>
    <?php foreach ($angka as $a) : ?>
    <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>

</html>