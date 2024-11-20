<?php

$data = [
    [
        "nis" => "100394",
        "nama" => "Regita",
        "kelas" => "XI RPL 1",
        "eskul" => ["band", "volly", "ec"],
        ],
    [
        "nama" => "Fauzan",
        "kelas" => "XI RPL 1",
        "eskul" => ["nari"],
        ],
    ];

// foreach ($data as $siswa) {
//     echo "Nama : " . $siswa["nama"] . "<br>";
//     echo "Kelas : " . $siswa["kelas"] . "<br>";
//     echo "Eskul : " . $siswa["eskul"]["nama_eskul"][0] . ", "
//                     . $siswa["eskul"]["nama_eskul"][1] . ", "
//                     . $siswa["eskul"]["nama_eskul"][2] . "<br>";
// }

foreach ($data as $siswa) {
    echo "Nama : " . $siswa['nama'] . "<br>";
    echo "Kelas : " . $siswa['kelas'] . "<br>";
    echo "Ekskul : ";
    foreach($siswa['eskul'] as $eskul){
        echo "<li>$eskul</li>";
    }
    echo "<hr>";
}