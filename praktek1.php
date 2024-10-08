<?php
// JSON yang sudah dibuat sebelumnya
$json = '{"nama":"John Doe","umur":30,"pekerjaan":"Pengembang","hobi":["Membaca","Bersepeda","Bermain Musik"]}';

// Decode JSON ke PHP Object
$obj = json_decode($json);

// Decode JSON ke PHP Array
$arr = json_decode($json, true);

// Mengakses nilai dari PHP Object
echo "Nama dari Object: " . $obj->nama . "\n";
echo "Umur dari Object: " . $obj->umur . "\n";

// Mengakses nilai dari PHP Array
echo "Nama dari Array: " . $arr['nama'] . "\n";
echo "Umur dari Array: " . $arr['umur'] . "\n";
?>