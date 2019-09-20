<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel Mahasiswa / query data Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Mengecek error
if (!$result) {
    echo mysqli_error($conn);
}

// Ambil data (fetch) mahasiswa dari object result
// 1 mysqli_fetch_row()     => Mengembalikan array numerik
// 2 mysqli_fetch_assoc()   => Mengembalikan array associative
// 3 mysqli_fetch_array()   => Mengembalikan keduanya
// 4 mysqli_fetch_object()

// 1
// $mhs1 = mysqli_fetch_row($result);
// var_dump($mhs1[3]);

// 2
// $mhs2 = mysqli_fetch_assoc($result);
// var_dump($mhs2["jurusan"]);

// 3
// $mhs3 = mysqli_fetch_array($result);
// var_dump($mhs3);

// 4
// $mhs4 = mysqli_fetch_object($result);
// var_dump($mhs4->nama);

// while ($mhs2 = mysqli_fetch_assoc($result)) {
//     var_dump(["nama"]);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <!-- Kolom untuk Judul -->
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- Kolom untuk isi Data -->
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="#">Ubah</a> |
                <a href="#">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"]; ?>" width="50">
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>