<?php
// ARRAY
// Membuat Array
$hari = ('senin', 'selasa', ' rabu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['akbar', 22, false];
$binatang = ['🦮', '🐖',,'🐒', '🦨', '🦎']

echo $hari[1];
echo "<hr>";
print_r ($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";
print_r ($myArray);
echo "<br>";
print_r ($binatang);
echo "<br>";

$hari[3]= 'kamis';
print_r($hari);
echo "<br>";

// menambahkan elemen baru di akhir array menggunakan array_push()

array_push($bulan,'april', 'mei' , 'juni', 'juli');
print_r($bulan);
echo"<hr>";

//menambahkan elemen bar di awal array menggunakan array_unshift
array_unshift($binatang, '🐓');
print_r ($binatang);

echo "<br>";
array_pop ($hari);
