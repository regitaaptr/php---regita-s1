<?php

class ppdb{
    public function data_diri($jurusan, $nama_siswa, $jk_siswa, $tempatl, $tanggall, $hp_siswa, $email_siswa){
        echo "Jurusan : $jurusan <br>" ;
        echo "Nama Lengkap ; $nama_siswa <br>";
        echo "Jenis Kelamin : $jk_siswa <br>";
        echo "Tempat lahir : $tempatl <br>";
        echo "Tanggal LAhir : $tanggall <br>";
        echo "No Hp Siswa yang Bisa di hubungi : $hp_siswa <br>";
        echo "Email : $email_siswa <br>";
    }
    public function alamat_calonp($provinsi, $kab, $kec, $desa, $alamat, $kodep){
        echo "Provinsi : $provinsi <br>";
        echo "Kabupaten : $kab <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa/Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kodep <br>";
    }
    public function data_asalsekolah($asal_sekolah, $alamat_asals){
        echo "Asal Sekolah : $asal_sekolah <br>";
        echo "Alamat Asal Sekolah : $alamat_asals";
    }
    public function data_ortu($nama_ortu, $pekerjaan_ortu, $hp_ortu, $alamat_ortu){
        echo "Nama Lengkap Ayah/Ibu/Wali : $nama_ortu <br>";
        echo "Pekerjaan  Ayah/Ibu/Wali : $pekerjaan_ortu <br>";
        echo "No Hp Ayah/Ibu/Wal : $hp_ortu <br>";
        echo "Alamat Lengkap : $alamat_ortu <br>";
    }
}

$dppdb = new ppdb();

echo "<hr>";
echo "<center><h3>Data Diri Siswa</h3></center> <br>";
echo $dppdb -> data_diri("RPL", "Regita Puteri Oktaviani", "Perempuan", "Bandung", "14 Oktober 2008", "089603002293", "regita@gmail.com");
echo "<hr>";
echo "<center><h3>Alamat Calon Pendaftar</h3></center>";
echo $dppdb -> alamat_calonp("Jawa Barat", "Bandung", "Dayeuhkolot", "Cangkuang Wetan", "Jl. Cisirung Sekeandur", "20244");
echo "<hr>";
echo "<center><h3>Asal Sekolah</h3></center>";
echo $dppdb-> data_asalsekolah("Mts Persis 30", "Cibedug");
echo "<hr>";
echo "<center><h3>Data Orangtua/Wali</h3></center>";
echo $dppdb -> data_ortu ("Asep Supardi", "Jendral", "0892933933", "Jl. Cisirung Sekeandur");
