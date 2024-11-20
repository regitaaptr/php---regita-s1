<?php
$buku  = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "tanggal_rilis" => "10 November 2024",
        "penerbit" => "Airlangga",
    ],
    [
        "judul" => "Eragon",
        "penulis" => "Christoper Paulini",
        "tanggal_rilis" => "30 September 2024",
        "penerbit" => "Gramedia Pustaka Utama",
    ],
    [
         "judul" => "Parable",
        "penulis" => "Brian krisha",
        "tanggal_rilis" => "5 Maret 2021",
        "penerbit" => "Kawah Media",
    ],
    [
         "judul" => "Home Sweet Loan",
        "penulis" => "Almira Bastari",
        "tanggal_rilis" => "16 Februari 2022",
        "penerbit" => "Gramedia Pustaka Utama",
    ],
    [
        "judul" => "Children of Anguish and Anarchy (Legacy of Orisha #3)",
        "penulis" => "Tomi Adeyemi",
        "tanggal_rilis" => "16 Agu 2024",
        "penerbit" => "Elex Media Komputindo",
    ],
];

foreach($buku as $book){
    echo "Judul : ".$book["judul"] ."<br>"; 
    echo "Penulis :" .$book["penulis"] ."<br>";
    echo "Tanggal Rilis :" .$book["tanggal_rilis"] ."<br>";
    echo "Penerbit :" . $book["penerbit"] . "<br>";
    echo "<hr>";

}