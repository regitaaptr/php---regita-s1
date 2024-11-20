<?php

$prov = "Jawa Barat";
$kota = "Bandung";

if ($prov == "Jawa Barat") {
    
    if ($kota == "Bandung") {
        echo "Selamat Datang Dikota Bandung";
    }elseif ($kota == "Cimahi") {
        echo "Selamat Datang Dikota Cimahi";
    }elseif ($kota == "Bogor") {
        echo "Selamat Datang Dikota Bogor";
    }elseif ($kota == "Bekasi") {
        echo "Selamat Datang Dikota Bekasi";
    }elseif ($kota == "Depok") {
        echo "Selamat Datang Dikota Depok";
    }else {
        echo"Kota tidak ada";
    }

}elseif ($prov == "Jawa Timur") {
   
    if ($kota == "Surabaya") {
        echo "Selamat Datang Dikota Surabaya";
    }elseif ($kota == "Malang") {
        echo "Selamat Datang Dikota Malang";
    }elseif ($kota == "Kediri") {
        echo "Selamat Datang Dikota Kediri";
    }elseif ($kota == "Mojokerto") {
        echo "Selamat Datang Dikota Mojokerto";
    }elseif ($kota == "Pasuruan") {
        echo "Selamat Datang Dikota Pasuruan";
    }else {
        echo"Kota tidak ada";
    }
    
}elseif ($prov == "Jawa Tengah") {
    
    if ($kota == "Semarang") {
        echo "Selamat Datang Dikota Semarang";
    }elseif ($kota == "Pekalongan") {
        echo "Selamat Datang Dikota Pekalongan";
    }elseif ($kota == "Pekalongan") {
        echo "Selamat Datang Dikota Salatiga";
    }elseif ($kota == "Surakarta") {
        echo "Selamat Datang Dikota Surakarta";
    }elseif ($kota == "Magelang") {
        echo "Selamat Datang Dikota Magelang";
    }else {
        echo"Kota tidak ada";
    }
    
}else {
    echo"Provinsi tidak ada";
}
