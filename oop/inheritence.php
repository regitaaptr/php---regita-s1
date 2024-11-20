<?php

class kendaraan{
    public $warna = "biru";
    public function a(){
        echo "Saya adalah kendaraan";
    }
}

    class mobil extends kendaraan{
        public function b(){
            echo $this->a();
            echo "<br>";
            echo "Warna Saya Adalah : $this->warna";
        }
    }

$cetak = new mobil();

echo $cetak->b();