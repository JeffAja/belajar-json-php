<?php
// =======================
// 1. Buat Array dan Encode ke JSON
// =======================
$data = [
    "nama" => "Defri",
    "umur" => 21,
    "hobi" => ["coding", "gaming", "membaca"]
];

// Encode ke JSON
$jsonData = json_encode($data);

echo "<h3>1. Hasil Encode Array ke JSON:</h3>";
echo $jsonData;
echo "<hr>";

// =======================
// 2. Decode JSON ke PHP Object dan Array
// =======================
$jsonString = '{"nama":"Defri","umur":21,"hobi":["coding","gaming","membaca"]}';

// Decode ke PHP Object
$obj = json_decode($jsonString);

// Decode ke PHP Array
$arr = json_decode($jsonString, true);

// Akses nilai dari Object
echo "<h3>2a. Akses dari PHP Object:</h3>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi Pertama: " . $obj->hobi[0] . "<br>";

// Akses nilai dari Array
echo "<h3>2b. Akses dari PHP Array:</h3>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi Kedua: " . $arr["hobi"][1] . "<br>";
?>
