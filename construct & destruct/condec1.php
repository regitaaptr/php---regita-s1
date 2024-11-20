<?php

class kucing{
    public function __construct(){
        echo "Halo aku kucing imut <br>";
    }
    public function makan(){
        echo "kucing lagi makan <br>";
    }
    public function minum(){
        echo "kucing lagi minum <br>";
    }
    public function __destruct(){
        echo "MIAWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW <br>";
    }
}

$hewan = new kucingA();