<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo "untuk menampilkan date";
echo date ("l, d-M-Y");

echo "<hr>";
echo "untuk menampilkan date = ";
// Time
// UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
echo date(" l", time() - 60 * 60 * 24 * 100);

echo "<hr>";

echo date("d M Y", time() - 60 * 60 * 24 * 100);
// 60 Detik, 60 Menit, 24 (1 Hari), 2(Hari yang akan di prediksi)

echo "<hr>";

// Mktime
// Membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date ("l", mktime (0,0,0,8,25,1998));
echo "<hr>";

// strtotime
echo date ("l", strtotime ("25 aug 1998"));

?>