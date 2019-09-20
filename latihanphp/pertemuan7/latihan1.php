<?php
 // $_GET
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
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </li> </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>