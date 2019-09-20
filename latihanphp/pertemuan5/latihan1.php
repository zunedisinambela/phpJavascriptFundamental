<?php
// Array
// Variabel yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antar key dan value
// Key-nya adalah index, yang dimulai dari 0

// Membuat array
// Cara lama
$hari = array("Senin","Selasa","Rabu");
// Cara Baru
$bulan = ["Januari", "Februari","Maret"];
$arr1 = [123,"Tulisan",false];

// Menampilkan array
// var_dump(), print_r()
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";

// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<hr>";
echo $bulan[1];
echo "<hr>";

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>