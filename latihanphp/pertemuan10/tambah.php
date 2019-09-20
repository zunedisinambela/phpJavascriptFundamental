<?php
 // Koneksi Database
require 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belom
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo    "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" placeholder="Masukan Nim Anda" required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" placeholder="Masukan Email Anda">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Masukan Jurusan Anda">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" placeholder="Masukan Gambar Anda">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data !</button>
            </li>
        </ul>
    </form>
</body>

</html>