<?php

$pemilik = [
    [
        "Nama" => "Safitri",
        "Buah" => [
            "namabuah" => ["Anggur"],
            "jenis" => ["Anggur Hijau", "Anggur Putih"]
        ],
    ],
    [
        "Nama" => "Rahman",
        "Buah" => [
            "namabuah" => ["Alpukat"],
            "jenis" => ["Alpukat Mentega", "Alpukat Biasa"]
        ],
        [
            "namabuah" => ["Apel" ],
            "jenis" => ["Apel Hijau", "Apel Merah"]
        ]
    ]
];

foreach ($pemilik as $key) {
    echo "Nama Pemilik : ".$key["Nama"]."<br>";
    echo "Daftar Buah Kesukaan : <br>";
    
    foreach ($key['Buah']['namabuah'] as $namabuah) {
        echo "-".$namabuah."<br>";
    }
    
    foreach ($key['Buah']['jenis'] as $jenis) {
        echo "<li>".$jenis."</li>";
    }

    echo "<br>";
}
?>