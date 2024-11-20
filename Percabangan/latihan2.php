<?php

$nama = "Regita";
$jk = "Perempuan";
$jenis = "minuman";
$menu = "air mineral";
$jumlah = 1;


echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Jenis : $jenis <br>";

if ($jenis == "makanan"){
    if ($menu == "nasi goreng"){
        $harga = 10000;
        $total = $harga * $jumlah;
        echo "
        Menu : Nasi Goreng <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
 }elseif ($menu == "mie goreng") {
    $harga = 20000;
    $total = $harga * $jumlah;
    echo "
        Menu : Mie Goreng <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
}elseif ($menu == "ayam goreng") {
    $harga = 15000;
    $total = $harga * $jumlah;
    echo "
        Menu : Ayam Goreng <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
    }else {
        echo "menu tidak tersedia";
    }
} 
elseif ($jenis == "minuman") {
    if ($menu == "air mineral") {
        $harga = 3000;
        $total = $harga * $jumlah;
        echo "
        Menu : Air Mineral <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
    } elseif ($menu == "fresh tea") {
    $harga = 5000;
    $total = $harga * $jumlah;
    echo "
        Menu : Fresh Tea <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
}   elseif ($menu == "jus") {
    $harga = 20000;
    $total = $harga * $jumlah;
    echo "
        Menu : Jus <br>
        ================================= <br>
        Harga : $harga <br>
        Jumlah : $jumlah <br>
        ================================= <br>
        Total : $total <br>
        ";
    }else {
        echo "menu tidak tersedia";
    }
}else{
    echo "Jenis tidak tersedia";
}

if ($total >= 50000) {
    $diskon = $total * 0.2;
    $hasil = $total - $diskon;
    echo "
    Diskon 20% : $diskon <br>
    Harga bayar : $hasil
    ";
}
