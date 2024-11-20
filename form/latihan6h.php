<?php

if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lk = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lain = $_POST['lainnya'];

    switch ($jabatan) {
        case 'Kepala Sekolah':
            $gaji = 10000000;
            break;
        case 'Wakasek':
            $gaji = 7500000;
            break;
        case 'Guru':
            $gaji = 5000000;
            break;
        case 'OB':
            $gaji = 2500000;
            break;
        default:
            $gaji = 0;
            break;
    }

    if ($lk > 5) {
        $tunjangan = 1000000;
    } else {
        $tunjangan = 0;
    }

    if ($status == 'Tetap') {
        $bonus = 500000;
    } else {
        $bonus = 0;
    }

    $gajikotor = $gaji + $tunjangan + $bonus;

    $potongan = $bpjs + $pinjaman + $tabungan + $lain;

    $gajibersih = $gajikotor - $potongan;

    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="p.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <br><center><h3 class=""><i class="text-center">Struk Gaji</i></h3></center>
    <div class="card mx-auto" style="width: 30rem;">
        <div class="card-header text-center">
            <?=$nama;?>
        </div>
        <div class="card-body">
            <h5 class="text-center">Primary card title</h5>
            <table align="center">
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><?php echo $no; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama; ?></td>
                </tr><tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $unit ; ?></td>
                </tr><tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><?php echo $tgl; ?></td>
                </tr>
            </table>
            <h4 class="text-center mt-3"><i>Gaji</i></h4>
            <table align="center">
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan; ?></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td><?php echo $gaji; ?></td>
                </tr><tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $lk; ?></td>
                </tr><tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $tunjangan; ?></td>
                </tr><tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $status; ?></td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td><?php echo $bonus; ?></td>
                </tr>
                <tr>
                    <td><b>Gaji Kotor</b></td>
                    <td>:</td>
                    <td><?php echo $gajikotor; ?></td>
                </tr>
            </table>
            <h4 class="text-center mt-3"><i>Potongan</i></h4>
            <table align="center">
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td><?php echo $bpjs; ?></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo $pinjaman; ?></td>
                </tr><tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo $tabungap; ?></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td></td>
                <tr>
                    <td><b>Total Potongan</b></td>
                    <td>:</td>
                    <td><?php echo $lain; ?></td>
                </tr>
            </table>
            <center><h4 class="text-center mt-3">Total</h4></center>
            <table align="center">
                <tr>
                    <td><h5><b>Gaji Bersih</b></h5></td>
                    <td>:</td>
                    <td><?php echo $gajibersih; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
}
?>
