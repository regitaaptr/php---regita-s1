<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="l12.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font ppdb -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <!-- font ppdb -->
    <title>PPDB SMK ASSALAAM</title>
  </head>
  <body>
    <center><img src="img/logosmk.png" style="width: 20%;" class="mt-5"></center>
    <center><h1 class="tp mt-3">PPDB SMK ASSALAAM</h1></center>
    <!-- data diri -->
    <form action="latihan12h.php" method="post">
      <div class="container mt-3 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg" style="width: 100rem;">
            <h5 class="text-center mb-4">Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</h5>
                <div class="form-group">
                  <table width="100%">
                    <tr>
                      <td>Jurusan*</td>
                      <td>:</td>
                      <td>
                          <div class="select-wrapper">
                              <select class="form-control" name="jurusan">
                                  <option disabled selected>Pilih Jurusan</option>
                                  <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                              </select>
                              <span class="custom-select-icon">&#9662;</span>
                          </div>  
                      </td> 
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap*</td>
                      <td>:</td>
                      <td><input type="text" class="form-control" name="nama_calon" placeholder="Nama Lengkap" required></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin*</td>
                      <td>:</td>
                      <td style="padding-left: 10px;">
                        <div class="btn-group btn-group-toggle custom-radio" data-toggle="buttons">
                          <label class="btn btn-outline-primary">
                              <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki - Laki
                          </label>
                          <label class="btn btn-outline-primary">
                              <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir*</td>
                      <td>:</td>
                      <td><input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required></td>
                    </tr>
                     <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir*</td>
                      <td>:</td>
                      <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                     <tr>
                      <td>No Hp Siswa*</td>
                      <td>:</td>
                      <td><input type="number" class="form-control" name="hp_siswa" placeholder="No Hp Siswa" required></td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><input type="email" class="form-control" name="email" placeholder="Email" required></td>
                    </tr>
                  </table>
                </div>
        </div>
    </div>
    <br>
    <!-- alamat -->
    <div class="container mt-3 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg" style="width: 100rem;">
        <h5 class="text-center mb-4">Alamat Calon Pendaftar</h5>
            <div class="form-group">
                <table width="100%">
                    <tr>
                        <td>Provinsi*</td>
                        <td>:</td>
                        <td>
                            <div class="select-wrapper">
                                <select class="form-control" name="provinsi">
                                    <option disabled selected>Pilih Provinsi</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                </select>
                                <span class="custom-select-icon">&#9662;</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Kab/Kota*</td>
                      <td>:</td>
                      <td>
                        <div class="select-wrapper">
                          <select class="form-control" name="kabupaten_kota">
                            <option disabled selected>Pilih Kabupaten/Kota</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Medan">Medan</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Makassar">Makassar</option>
                            <option value="Depok">Depok</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Malang">Malang</option>
                          </select>
                          <span class="custom-select-icon">&#9662;</span>
                        </div>                
                      </td>
                    </tr>
                     <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Kecamatan*</td>
                      <td>:</td>
                      <td>
                        <div class="select-wrapper">
                          <select class="form-control" name="kecamatan">
                            <option disabled selected>Pilih Kecamatan</option>
                            <option value="Andir">Andir</option>
                            <option value="Astanaanyar">Astanaanyar</option>
                            <option value="Antapani">Antapani</option>
                            <option value="Arcamanik">Arcamanik</option>
                            <option value="Bandung Kidul">Bandung Kidul</option>
                            <option value="Bandung Kulon">Bandung Kulon</option>
                            <option value="Bandung Wetan">Bandung Wetan</option>
                            <option value="Batununggal">Batununggal</option>
                            <option value="Cibeunying Kidul">Cibeunying Kidul</option>
                            <option value="Cibeunying Kaler">Cibeunying Kaler</option>
                        </select>
                          <span class="custom-select-icon">&#9662;</span>
                        </div>            
                      </td>
                    </tr>
                     </tr>
                     <tr>
                      <td><br></td>
                    </tr>
                    <tr>
                      <td>Desa/Kelurahan*</td>
                      <td>:</td>
                      <td>
                        <div class="select-wrapper">
                          <select class="form-control" name="dk">
                          <option disabled selected>Pilih Desa/Kelurahan</option>
                          <option value="Cicadas">Cicadas</option>
                          <option value="Cicendo">Cicendo</option>
                          <option value="Cibadak">Cibadak</option>
                          <option value="Cigondewah">Cigondewah</option>
                          <option valu  e="Cijerah">Cijerah</option>
                          <option value="Dago">Dago</option>
                          <option value="Lengkong">Lengkong</option>
                          <option value="Ciumbuleuit">Ciumbuleuit</option>
                          <option value="Sukamiskin">Sukamiskin</option>
                          <option value="Antapani Wetan">Antapani Wetan</option>
                      </select>
                          <span class="custom-select-icon">&#9662;</span>
                        </div>
                      </td>            
                    </tr>
                    <tr>
                      <td><br></td>   
                    </tr>
                    <tr>
                      <td>Alamat*</td>
                      <td>:</td>
                      <td>
                        <textarea class="form-control" name="alamat_calon" id="" placeholder="Alamat"></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td><br></td>
                    </tr> 
                    <tr>
                      <td>Kode Pos*</td>
                      <td>:</td>
                      <td><input type="number" name="kp" class="form-control" placeholder="Kode Pos"></td>
                    </tr>  
                     <tr>
                      <td><br></td>
                    </tr> 
                    <tr>
                </table>
            </div>
    </div>
</div>
<br>
<!-- alamat -->
 <!-- data sekolah -->
  <div class="container mt-3 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg" style="width: 100rem;">
        <h5 class="text-center mb-4">Data Asal Sekolah</h5>
            <div class="form-group">
              <table width="100%">
                <tr>
                    <td>Nama Asal Sekolah*</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Asal Sekolah"></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Alamat Asal Sekolah*</td>
                    <td>:</td>
                    <td>
                      <textarea class="form-control" name="alamat_sekolah" id="" placeholder="Alamat Asal Sekolah "></textarea>
                    </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
              </table>
            </div>
    </div>
  </div>
  <br>
  <!-- data sekolah -->
   <!-- data ortu -->
     <div class="container mt-3 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg" style="width: 100rem;">
        <h5 class="text-center mb-4">Data Orang Tua</h5>
            <div class="form-group">
              <table width="100%">
               <tr>
                  <td>Nama Lengkap Ayah / Ibu / Wali*</td>
                  <td>:</td>
                  <td>
                      <div class="select-wrapper" style="width: 100px; display: inline-block; margin-right: 10px;">
                          <select class="form-control" name="aiw">
                              <option value="Ayah">Ayah</option>
                              <option value="Ibu">Ibu</option>
                              <option value="Wali">Wali</option>
                          </select>
                          <span class="custom-select-icon">&#9662;</span>
                      </div>
                      <input type="text" class="form-control" name="nama_aiw" style="display: inline-block; width: 80%;" placeholder="Nama Lengkap Orangtua/Wali">
                  </td>
              </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>Pekerjaan Ayah / Ibu / Wali *</td>
                  <td>:</td>
                  <td colspan="2"><input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan OrangTua/Wali"></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>Nomor HP yang bisa dihubungi *</td>
                  <td>:</td>
                  <td><input type="text" class="form-control" name="hp_ortu" placeholder="No Hp Orangtua/Wali"></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                    <td>Alamat Lengkap*</td>
                    <td>:</td>
                    <td>
                      <textarea class="form-control" name="alamat_ortu" id=""></textarea>
                    </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td><button class="fun-light-purple-button" name="save">Simpan & Daftar</button></td>
                </tr>
              </table>
            </div>
    </div>
  </div>
    <!-- data ortu -->
</form>
    <!-- data diri -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>