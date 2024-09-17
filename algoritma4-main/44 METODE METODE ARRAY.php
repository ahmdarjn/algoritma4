<?php
echo "<pre>";
$buah = ["apel", "jeruk"];
array_push($buah, "pisang", "mangga");
print_r($buah);
echo "</pre><hr>";

$buah = ["apel", "jeruk", "pisang <hr>"];
$buahTerakhir = array_pop($buah);
echo $buahTerakhir;

$buah = ["apel <hr>", "jeruk", "pisang "];
$buahPertama = array_shift($buah);
echo $buahPertama;

echo "<pre>";
$buah = ["apel", "jeruk"];
array_unshift($buah, "pisang", "mangga");
print_r($buah);
echo "</pre> <hr>";

echo "<pre>";
$array1 = ["warna" => "merah", 2, 4];
$array2 = ["a", "b", "warna" => "hijau", "bentuk" => "trapesium", 4];
$result = array_merge($array1, $array2);
print_r($result);
echo "</pre><hr>";


echo "<pre>";
$buah = ["apel", "jeruk", "pisang", "mangga"];
$subBuah = array_slice($buah, 1, 2);
print_r($subBuah);
echo "<pre><hr>";

echo "<pre>";
$buah = ["apel", "jeruk", "pisang", "mangga"];
array_splice($buah, 2, 1, "kiwi");
print_r($buah);
echo "<pre>";
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";