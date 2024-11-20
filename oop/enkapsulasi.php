<?php

class contoh{
    public $nama = "Regita";

    public function perkenalan(){
        echo "Assalaamualaikum";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo "<br>";
echo $cetak->nama;