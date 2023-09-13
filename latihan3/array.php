<?php
//array
// vaiabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah indeks, yang dimulai dari 0

// cara membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array 
// echo $arrl[0];
// ebco "<br>";
// echo $bulan[1];

// menampilkan elemen baru pada array 
var_dump($hari);
$hari[]= "kamis";
$hari[] = "jum'at";
echo "<br>";;
var_dump($hari);