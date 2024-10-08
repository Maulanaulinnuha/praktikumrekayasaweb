<?php
// Membuat variabel array
$array = [
    "nama" => "John Doe",
    "umur" => 30,
    "pekerjaan" => "Pengembang",
    "hobi" => ["Membaca", "Bersepeda", "Bermain Musik"]
];

// Mengencode array ke format JSON
$json = json_encode($array);

// Menampilkan hasil JSON
echo "JSON: " . $json . "\n";
?>