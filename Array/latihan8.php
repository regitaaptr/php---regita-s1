<?php

$buku = '[
    {
        "no" : "1",
        "judul" : "Dilan 1991",
        "genre" : "romance",
        "penulis" : "Pidi Baiq",
        "penerbit" : "Airlangga",
        "rilis" : "10 November 2024"
    },
    {
        "no" : "2",
        "judul" : "Eragon",
        "genre" : "Action",
        "penulis" : "Christoper Paulini",
        "penerbit" : "Gramedia Pustaka Utama",
        "rilis" : "30 September 2024"
    },
     {
        "no" : "3",
        "judul" : "Daughter of the Moon Goddess",
        "genre" : "Romance",
        "penulis" : "Sue Lynn Tan",
        "penerbit" : "Mizan Fantasi",
        "rilis" : "17 Sep 2024"
    },
        {
        "no" : "4",
        "judul" : "Laskar Pelangi",
        "genre" : "Novel",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "rilis" : "30 September 2024"
    },
    {
        "no" : "5",
        "judul" : "Harry Potter and the Philosophers Stone",
        "genre" : "Fantasi",
        "penulis" : "J.K. Rowling",
        "penerbit" : "Bloomsbury",
        "rilis" : "1997"
    },
    {
        "no" : "6",
        "judul" : "Rumah Kaca",
        "genre" : "Novel",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "rilis" : "1980"
    },
     
   {
        "no" : "7",
        "judul" : "Alice in Wonderland",
        "genre" : "Fiksi",
        "penulis" : "Lewis Carroll",
        "penerbit" : "Berbagai penerbit",
        "rilis" : "1865"
    },
    {
        "no" : "8",
        "judul" : "21 Lessons for the 21st Century",
        "genre" : "Non-fiksi",
        "penulis" : "Yuval Noah Harari",
        "penerbit" : "Spiegel dan Grau",
        "rilis" : "2018"
    },
    {
        "no" : "9",
        "judul" : "Sapiens: A Brief History of Humankind",
        "genre" : "Non-fiksi",
        "penulis" : "Yuval Noah Harari",
        "penerbit" : "Harvill Secker",
        "rilis" : "2011"
    },
    {
        "no" : "10",
        "judul" : "Sang Pemimpi",
        "genre" : "Novel",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "rilis" : "2007"
    },
    {
        "no" : "11",
        "judul" : "Sang Pemimpi",
        "genre" : "Novel",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "rilis" : "2007"
    },
    {
        "no" : "12",
        "judul" : "Gadis Penjual Korek Api",
        "genre" : "Dongeng",
        "penulis" : "Hans Christian Andersen",
        "penerbit" : "Berbagai penerbit",
        "rilis" : "2015"
    },
    {
        "no" : "13",
        "judul" : "Anak Semua Bangsa",
        "genre" : "Novel",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "rilis" : "1981"
    },
    {
        "no" : "14",
        "judul" : "The Lord of the Rings",
        "genre" : "Fantasi",
        "penulis" : "J.R.R. Tolkien",
        "penerbit" : "Berbagai penerbit",
        "rilis" : "1954-1955"
    },
    {
        "no" : "15",
        "judul" : "Di Timur Matahari",
        "genre" : "Novel",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "rilis" : "1982"
    },
    {
        "no" : "16",
        "judul" : "Buru",
        "genre" : "Novel",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "rilis" : "1980"
    },
    {
        "no" : "17",
        "judul" : "Parable",
        "genre" : "Novel",
        "penulis" : "Brihian Krisha",
        "penerbit" : "Kawah Media",
        "rilis" : "5 Maret 2021"
    },
    {
        "no" : "18",
        "judul" : "Hujan di Bulan Juni",
        "genre" : "Novel",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "rilis" : "2007"
    },
    {
        "no" : "19",
        "judul" : "Hujan di Bulan Juni",
        "genre" : "Novel",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka Utama",
        "rilis" : "2007"
    },
        {
        "no" : "20",
        "judul" : "Pride and Prejudice",
        "genre" : "Roman, Satire",
        "penulis" : "Jane Austen",
        "penerbit" : "T. Egerton",
        "rilis" : "1813"
    }
]';

$data = json_decode($buku);

echo "<br>";
echo "<center><h2>Kumpulan Novel Terbaru</center> </h2><br>";
echo "
    <center>
        <table border=1 cellspading=0 cellspacing=0 width=80%>
            <tr>
                <th><center>No</center></th>
                <th><center>Judul</center></th>
                <th><center>Genre</center></th>
                <th><center>Penulis</center></th>
                <th><center>Penerbit</center></th>
                <th ><center>Tahun Rilis</center></th>
            </tr>
    ";

foreach ($data as $book) {
    echo "
        <tr>
            <td><center>{$book->no} </center></td>
            <td><center>{$book->judul} </center></td>
            <td><center>{$book->genre}</center></td>
            <td><center>{$book->penulis} </center></td>
            <td><center>{$book->penerbit}</center></td>
            <td><center>{$book->rilis}</center></td>
        </tr>
    ";   
}
echo "
 </table>
    </center>
";

// foreach($data as $book){
//     echo "---------------------------------------------------------<br>";
//     echo "No : {$book -> no} <br>";
//     echo "Judul : {$book->judul} <br>";
//     echo "Genre : {$book->genre} <br>";
//     echo "Penulis : {$book->penulis} <br>";
//     echo "Penerbit : {$book->penerbit} <br>";
//     echo "Tanggal Rilis : {$book->rilis} <br>";
// }


  





   
   