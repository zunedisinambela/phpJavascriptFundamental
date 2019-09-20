<?php
 // Koneksi Database
require 'functions.php';

// Ambil Data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakah tombol submit sudah diubah atau tidak
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo    "<script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'index.php';
                </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal Diubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nim">Nim :</label>
                <input type="text" name="nim" id="nim" placeholder="Masukan Nim Anda" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" placeholder="Masukan Email Anda" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Masukan Jurusan Anda" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" placeholder="Masukan Gambar Anda" value="<?= $mhs["gambar"]; ?>"> <br> <br>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data !</button>
            </li>
        </ul>
    </form>
</body>

</html>