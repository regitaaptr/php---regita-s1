<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128,
    "tanggal" => "20 Juni 2004"
];

// mencetak isi array asosiatif
echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>oleh: " . $artikel["penulis"] . "</p>";
echo "<p>View: " . $artikel["view"] . "</p>";
echo "<p> Tanggal :" .$artikel["tanggal"] . "</p>";
