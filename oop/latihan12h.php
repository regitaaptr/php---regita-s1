<?php

if (isset($_POST['save'])) {
    // calon siswa
    $jurusan = $_POST['jurusan'];
    $nama_calon = $_POST['nama_calon'];
    $jk = $_POST ['jenis_kelamin'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $hp_siswa = $_POST ['hp_siswa'];
    $email = $_POST ['email'];
    // calon siswa
    // alamat calon
    $provinsi = $_POST ['provinsi'];
    $kk = $_POST ['kabupaten_kota'];
    $kec = $_POST ['kecamatan'];
    $dk = $_POST['dk'];
    $alamat_calon = $_POST['alamat_calon'];
    $kp = $_POST ['kp'];
    // alamat calon
    // data as
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat_sekolah = $_POST['alamat_sekolah'];
    // data as
    // data aiw
    $jaiw = $_POST ['aiw'];
    $nama_aiw = $_POST['nama_aiw'];
    $pekerjaan = $_POST['pekerjaan'];
    $hp_ortu = $_POST['hp_ortu'];
    $alamat_ortu = $_POST['alamat_ortu'];
    // data aiw

    class data{
        public function __construct(){
            echo "
             <br><center><h3><i class='text-center'>ANDA SUDAH DAFTAR</i></h3></center>
            ";
        }
        public function data_diri_calon($jurusan2, $nama_calon2, $jk2, $tempat_lahir2, $tanggal_lahir2, $hp_siswa2, $email2){
            echo "
            <!doctype html>
        <html lang='en'>
        <head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' integrity='sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin='anonymous'>

            <title>PPDB</title>
        </head>
        <body>
                 <div class='card mx-auto' style='width: 30rem;'>
        <div class='card-header text-center'>
            
        </div>
        <div class='card-body'>
            <h5 class='text-center'>Data Diri Calon Pendaftar</h5>
            <table align='center'>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>$jurusan2</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$nama_calon2</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>$jk2</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>$tempat_lahir2</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>$tanggal_lahir2</td>
                </tr>
                <tr>
                    <td>No Hp Siswa</td>
                    <td>:</td>
                    <td>$hp_siswa2</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>$email2</td>
                </tr>
            </table>
            ";
        } public function alamat_calon_pendaftar($provinsi2, $kk2, $kec2, $dk2, $alamat_calon2, $kp2){
            echo "
            <h4 class='text-center mt-3'><i>Alamat Calon Pendaftar</i></h4>
            <table align='center'>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td>$provinsi2</td>
                </tr>
                <tr>
                    <td>Kab/Kota</td>
                    <td>:</td>
                    <td>$kk2</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td>$kec2</td>
                </tr>
                <tr>
                    <td>Desa/Kelurahan</td>
                    <td>:</td>
                    <td>$dk2</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>$alamat_calon2</td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td>:</td>
                    <td>$kp2</td>
                </tr>
            </table>
            ";
        }public function data_asal_sekolah($nama_sekolah2, $alamat_sekolah2){
            echo"
            <h4 class='text-center mt-3'><i>Data Asal Sekolah</i></h4>
            <table align='center'>
                <tr>
                    <td>Nama Sekolah</td>
                    <td>:</td>
                    <td>$nama_sekolah2</td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>:</td>
                    <td>$alamat_sekolah2</td>
            </table>
            ";
        }public function data_orang_tua($jaiw2, $nama_aiw2, $pekerjaan2, $hp_ortu2, $alamat_ortu2){
            echo "
            <center><h4 class='text-center mt-3'>Data Orang Tua</h4></center>
            <table align='center'>
                <tr>
                    <td>Orangtua/Wali</td>
                    <td>:</td>
                    <td>$jaiw2</td>
                </tr>
                <tr>
                    <td>Nama Lengkap Ayah / Ibu / Wali</td>
                    <td>:</td>
                    <td>$nama_aiw2</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah / Ibu / Wali</td>
                    <td>:</td>
                    <td>$pekerjaan2</td>
                </tr>
                <tr>
                    <td>Nomor HP yang bisa dihubungi</td>
                    <td>:</td>
                    <td>$hp_ortu2</td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td>$alamat_ortu2</td>
                </tr>
            </table>
        </div>
    </div>
      <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct' crossorigin='anonymous'></script>

  </body>
</html>
        ";
        }
    }
}

    $cetak = new data();
    echo $cetak->data_diri_calon($jurusan, $nama_calon, $jk, $tempat_lahir,$tanggal_lahir,$hp_siswa,$email );
    echo $cetak->alamat_calon_pendaftar($provinsi, $kk, $kec, $dk, $alamat_calon, $alamat_calon, $kp);
    echo $cetak->data_asal_sekolah($nama_sekolah, $alamat_sekolah);
    echo $cetak->data_orang_tua($jaiw, $nama_aiw, $pekerjaan, $hp_ortu, $alamat_ortu);
?>
   