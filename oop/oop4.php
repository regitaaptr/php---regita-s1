<?php

class penggajihan{
    public $gajip;
    public $tunjangan;
    public $totalpotongan;
  
    public function gaji_pokok($nama, $jabatan){
        echo "<b>Gaji Pokok</b><br>";
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        switch ($jabatan) {
            case 'Direktur':
                $this->gajip = 10000000;
                break;

            case 'Manager':
                $this->gajip = 7500000;
                break;

            case 'Karyawan':
                $this->gajip = 5000000;
                break;

            case 'OB':
                $this->gajip = 2500000;
                break;

            default:
                $this -> gaji = 0;
                break;
        }
        echo "Gaji Pokok : $this->gajip";
    }

    public function tunjangan_pendidikan($pendidikan){
        echo "<b>Tunjangan</b><br>";
        echo "Pendidikan : $pendidikan <br>";
        switch ($pendidikan) {
            case 's1':
                $this->tunjangan = 1000000;
                break;

            case 'sma':
                $this->tunjangan = 750000;
                break;

            case 'smo':
                $this->tunjangan = 500000;
                break;

            case 'sd':
                $this->tunjangan = 250000;
                break;

            default:
                $this -> tunjangan = 0;
                break;
        }
        echo "Gaji Pokok : $this->tunjangan";
    }
  
    public function potongan($tabungan, $pinjaman){
        echo "<b>Potongan</b> <br>";
        echo "Tabungan : $tabungan  <br>";
        echo "Pinjaman : $pinjaman <br>";
        $this->totalpotongan = $tabungan + $pinjaman;
        echo "Total Pinjaman : $this->totalpotongan";
    }
    public function total_gaji(){
        $totalgaji = $this->gajip + $this->tunjangan - $this->totalpotongan;
        echo "Total Gaji Bersih : $totalgaji ";
    }
}

$data = new penggajihan();

echo "<center><h2>Penggajihan Karyawan</h2></center><br>";
echo $data -> gaji_pokok("Regita", "Direktur"); 
echo "<hr>";
echo $data -> tunjangan_pendidikan("s1");
echo "<hr>";
echo $data -> potongan(100000,50000);
echo "<hr>";
echo $data -> total_gaji();

