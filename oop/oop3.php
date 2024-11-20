<?php

class bangun_datar{

    public $hasil;
    public $hasil2;

    public function luas_segitiga($alas, $tinggi){
        echo "<hr>";
        echo "<h2>Menghitung Luas Segitiga</h2>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        $hasils= $alas * $tinggi / 2;
        echo "Luasnya : $hasils";
    }
    public function lingkaran($jari){
        echo "<h2>Menghitung Luas Lingkaran</h2>";
        $phi = 3.14;
        echo "Jari - jari : $jari <br> ";
        $jari2 = $jari * $jari;
        $hasill = $phi * $jari2;
        echo "Hasilnya : $hasill";
        echo "<hr>";
    }
    public function persegip($p, $l){
        echo "<h2>Menghitung Luas Persegi Panjang</h2>";
        echo "Panjang : $p <br>";
        echo "Lebar : $l <br>";
        $this -> hasil = $p * $l;
        echo "Hasil : $this->hasil";
        echo "<hr>";
    }
    public function persegi($sisi){
        echo "<h2>Menghitung Luas Persegi</h2>";
        echo "Sisi : $sisi <br>";
        $hasilp = $sisi * $sisi;
        echo "Hasil : $hasilp";
        echo "<hr>";
    }
}

$data = new bangun_datar();

echo $data -> luas_segitiga(10,20);
echo $data -> persegip(10,20);
echo $data-> lingkaran(10, 20);
echo $data->persegi(10, 20);

