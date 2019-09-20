<?php
// Sistem diatas
function salam ($waktu = "Datang", $nama = "Sinambela") {
    return "Selamat $waktu, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Function</title>
</head>
<body>
<!-- Jika data di bawah ini tidak di isi maka secara otomatis data akan di isi oleh  sistem di atas -->
<h1><?= salam( "Malam"); ?></h1>
</body>
</html>