<?php

class contoh{
    public $nama = "Regita";

    private function perkenalan(){
        echo "Assalaamualaikum";
    }
    public function tampil(){
        echo $this->perkenalan();
    }
}

$cetak = new contoh();

echo $cetak->tampil();
// echo "<br>";
// echo $cetak->nama;