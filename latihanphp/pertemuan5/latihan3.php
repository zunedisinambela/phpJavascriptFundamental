<?php
$mahasiswa = [
    ["Zunedi", "2016420094", "Teknik Informatika", "Zunedi@gmail.com"],
    ["Sinambela", "2016420090", "Teknik Sipil", "Sinambela@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Cara Pertama</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama = <?= $mhs[0]; ?></li>
        <li>Nim = <?= $mhs[1]; ?></li>
        <li>Jurusan = <?= $mhs[2]; ?></li>
        <li>Email = <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>