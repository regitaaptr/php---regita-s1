<?php

$toko = [
            [
                "nama" => "Regita Puteri Oktaviani",
                "daftar" => [
                [
                    "buah" => "Anggur",
                    "anakbuah" => ["jenis1" => "Anggur Putih",
                                    "jenis2" => "Anggur Hijau"]
                ]
                ]
                ],
            [
                "nama" => "Muhammad Rayyan Zaidan",
                "daftar" => [
                [
                    "buah" => "Anggur",
                    "anakbuah" => ["jenis1" => "Anggur Putih",
                                    "jenis2" => "Anggur Hijau"]
                ],
                [
                    "buah" => "Anggur",
                    "anakbuah" => ["jenis1" => "Anggur Putih",
                                    "jenis2" => "Anggur Hijau"]
                ]
                ]
            ]
        ];

foreach($toko as $buah){
    echo "Nama : " .$buah["nama"] . "<br>";
    echo "Daftar Buah Kesukaan : <ul>" ;
    foreach($buah["daftar"] as $vaf){
        echo "<li>".$vaf["buah"]."</li>";
    foreach($vaf["anakbuah"] as $jenis ){
        echo "<ul> - ".$jenis."</ul>";
    }
    }
    echo"<br>";
    echo "<hr>";
}

?>