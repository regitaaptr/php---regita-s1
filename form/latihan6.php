<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <br><br>
    <center><img src="img/logoy.png" width: "18%"></center>
    <div class="card mx-auto" style="width: 30rem;">
        <h5 class="card-header">Data Penggajihan</h5>
            <div class="card-body">
            <form action="latihan6h.php" method="post">
                <div class="mb-3">
                    <label class="form-label">No :</label>
                    <input type="text" class="form-control" name="no">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama :</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Unit Pendidikan :</label>
                    <select name="unit" class="" aria-label="" style="width: 27rem;">
                        <option selected>Pilih Unit Pendidikan</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="">Tanggal Gaji :</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <h3 class="ms-3 text-center"><i>Gaji</i></h3>
                            <label class="form-label ">Jabatan :</label>
                            <select name="jabatan" class="" aria-label="" style="width: 13rem;">
                                <option selected>Pilih Unit Pendidikan</option>
                                <option value="Kepala Sekolah"> Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="OB">OB</option>
                            </select>
                        </div>
                         <div class="mb-3">
                            <label class="form-label ">Lama Kerja :</label>
                            <input type="text" name="lama" style="width: 13rem;" placeholder="Lama Kerja">
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Status Kerja :</label>
                            <select name="status" class="" aria-label="" style="width: 13rem;">
                                <option selected>Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <h3 class="text-center"><i>Potongan</i></h3>
                            <label class="form-label ">BPJS</label>
                            <input type="text" name="bpjs">
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Pinjaman :</label>
                            <input type="text" name="pinjaman">
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Tabungan :</label>
                            <input type="text" name="tabungan">
                        </div>
                         <div class="mb-3">
                            <label class="form-label ">Lainnya :</label>
                            <input type="text" name="lainnya">
                        </div>
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="proses">Proses</button></center>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

