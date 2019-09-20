<?php 
// Pengulangan
// for
// while
// do.. while
// foreach

echo "Menggunakan for <br>";
for ($i=0; $i < 5; $i++) { 
	echo $i . " " . "Hello <br>";
}

echo "<hr>";

echo "Menggunakan while <br>";
$j = 0;
while ( $j < 5) {
	echo $j . " " . "Hello <br>";
	$j++;
}

echo "<hr>";

echo "Menggunakan do.. while <br>";
$k = 0;
do {
	echo $k . " " . "Hello <br>";
	$k++;
}while ( $k < 5);


?>