<?php 
// Pertemuan 2
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Selamat Datang di Belajar PHP";
echo "<hr>";
print "Selamat Datang di Belajar PHP";
echo "<hr>";
var_dump("Selamat Datang di Belajar PHP");
echo "<hr>";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Nama tidak boleh diawali dengan angka, tapi boleh mengandung angka contoh : nama1

$nama = "Zunedi SInambela";
echo 'Halo Nama Saya adalah $nama';
echo "<br>";
echo "Halo Nama Saya adalah $nama";
echo "<hr>";

// Operator
// Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
echo "<hr>";

// Penggabung String / concatenation / concat
// .
$nama_depan = "Zunedi";
$nama_belakang = "Sinambela";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// Assignment
// =, +=, -=, *=, /=, %=, .=

$nama1 = "Arjun";
$nama1 .= " ";
$nama1 .= "Sinambela23";
echo $nama1;
echo "<hr>";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 <= 5);
echo "<hr>";

// Identitas
// ===, !==
var_dump(1 === "1");
echo "<hr>";

// Logika
// &&, ||, !
$a = 30;
var_dump($a < 20 && $a % 2 == 0);

?>