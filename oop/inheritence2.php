<?php

class bangun_datar{
    public $luas_persegi_panjang;
    public $luas_persegi;
    public $luas_segitiga;
    public $luas_lingkaran;
    public $keliling_persegip;
    public $keliling_persegi;
    public $keliling_lingkaran;
    public $keliling_segitiga;    

}

    class luas extends bangun_datar{
        public function persegip($p, $l){
        echo "<h2>Menghitung Luas Persegi Panjang</h2>";
        echo "Panjang : $p <br>";
        echo "Lebar : $l <br>";
        $this->luas_persegi_panjang = $p * $l;
        echo "Luasnya : $this->luas_persegi_panjang";
        echo "<hr>";
    }
    public function persegi($sisi){
        echo "<h2>Menghitung Luas Persegi</h2>";
        echo "Sisi : $sisi <br>";
        $this->luas_persegi = $sisi * $sisi;
        echo "Hasil : $this->luas_persegi";
        echo "<hr>";
    }
    public function luas_segitiga($alas, $tinggi){
        echo "<h2>Menghitung Luas Segitiga</h2>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        $this->luas_segitiga= $alas * $tinggi / 2;
        echo "Luasnya : $this->luas_segitiga";
        echo "<hr>";
    }
    public function lingkaran($jari){
        echo "<h2>Menghitung Luas Lingkaran</h2>";
        $phi = 3.14;
        echo "Jari - jari : $jari <br> ";
        $jari2 = $jari * $jari;
        $this->luas_lingkaran = $phi * $jari2;
        echo "Hasilnya : $this->luas_lingkaran";
        echo "<hr>";
    }
}

    class keliling extends bangun_datar{
        public function kpersegip($panjang, $lebar){
            echo "<h2>Menghitung Keliling Persegi Panjang</h2>";
            echo "Panjang : $panjang <br> ";
            echo "Lebar : $lebar <br>";
            $this->keliling_persegip = 2 * $panjang + $lebar;
            echo "Hasil : $this->keliling_persegip";
        }
        public function kpersegi($sisis){
            echo "<h2>Menghitung Keliling Persegi Panjang</h2>";
            echo "Sisi : $sisis <br>";
            $this->keliling_persegi = $sisis * 4;
            echo "Hasil = $this->keliling_persegi";
        }
        public function klingkaran($d){
            echo "<h2>Menghitung Keliling Lingkaran</h2>";
            $phi = 3.14;
            echo "Diameter : $d <br>";
            $this->keliling_lingkaran = $phi * $d;
            echo "Hasil = $this->keliling_lingkaran";
        }
        public function ksegitiga($a,$b,$c){
            echo "<h2>Menghitung Keliling Segitiga</h2>";   
            echo "sisi 1 : $a <br>";
            echo "sisi 2 : $b <br>";
            echo "sisi 3 : $c <br>";
            $this->keliling_segitiga = $a + $b +$c;
            echo "Hasil : $this->keliling_segitiga";
        }
    }

$cetak = new luas();
$cetak2 = new keliling();

echo $cetak->persegip(10,9);
echo $cetak->persegi(10);
echo $cetak->luas_segitiga(7,9);
echo $cetak->lingkaran(10);
echo $cetak2->kpersegip(5,14);
echo $cetak2->kpersegi(5);
echo $cetak2->klingkaran(17);
echo $cetak2->ksegitiga(2,5,7);