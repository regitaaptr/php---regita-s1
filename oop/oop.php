<?php
// buat class
class Kucing
{
    // buat property
    public $warna;
    public $jenis;

    // method / function
    public function makan()
    {
        echo "Kucing Suka Makan";
    }
    public function Minum()
    {
        echo "Kucing Suka air";
    }
}

// buat objek
$cetak = new Kucing(); // instansiasi

// manggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

// memanggil property
// echo $cetak -> warna = "kuning";
// echo "<br>";
// echo $cetak -> jenis = "Anggora";
