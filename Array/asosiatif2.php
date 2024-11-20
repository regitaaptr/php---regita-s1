<?php

$siswa = [
    [
        "nama" => "Regita Puteri Oktaviani",
        "kelas"=> "XI RPL 1",
    ],
    [
        "nama" => "Fushiguro Megumi",
        "kelas" => "XI RPL 1",
    ],
];

foreach($siswa as $data){
    echo "Nama : ". $data["nama"]. "<br>";
    echo "Kelas : ". $data["kelas"]. "<br>";
    echo "<hr>";
}