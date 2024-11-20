<?php
// data
$dataJSON = '[
    {
        "nama" : "Regita",
        "alamat" : "Bandung"
    },
    {
        "nama" : "Rayyan",
        "alamat" : "surabaya"
    }
]'; 

// di konversikan ke JSON'
$list = json_decode($dataJSON);

// menampilkan datanya
foreach($list as $mahasiswa){
    echo "Nama :  {$mahasiswa -> nama} <br>"; 
    echo "Alamat :  {$mahasiswa -> alamat} <br>";
}