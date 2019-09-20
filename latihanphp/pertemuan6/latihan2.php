<?php
 // Array Associative
//  Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Zunedi",
        "nim" => "2016420094",
        "jurusan" => "Teknik Informatika",
        "email" => "Zunedi@gmail.com",
        "gambar" => "1.jpg"
    ],

    [
        "nama" => "Sinambela",
        "nim" => "2016420090",
        "jurusan" => "Teknik Sipil",
        "email" => "Sinambela@gmail.com",
        "gambar" => "2.jpg"
    ]
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
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> ">
        </li>
        <li> Nama = <?= $mhs["nama"]; ?> </li>
        <li> Nim = <?= $mhs["nim"]; ?> </li>
        <li> Jurusan = <?= $mhs["jurusan"]; ?> </li>
        <li> Email = <?= $mhs["email"]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>

</html>