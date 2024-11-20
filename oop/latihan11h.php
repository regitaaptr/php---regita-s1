<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST ['jurusan'];

    $nilaiharian_m = $_POST ['nilai_harian_matematika'];
    $nilaitugas_m = $_POST ['nilai_tugas_matematika'];
    $nilaiuts_m = $_POST ['nilai_uts_matematika'];
    $nilaiuas_m = $_POST ['nilai_uas_matematika'];

    $nilaiharian_indo = $_POST ['nilai_harian_indo'];
    $nilaitugas_indo = $_POST ['nilai_tugas_indo'];
    $nilaiuts_indo = $_POST ['nilai_uts_indo'];
    $nilaiuas_indo = $_POST ['nilai_uas_indo'];

    $nilaiharian_inggris = $_POST['nilai_harian_inggris'];
    $nilaitugas_inggris = $_POST['nilai_tugas_inggris'];
    $nilaiuts_inggris = $_POST['nilai_uts_inggris'];
    $nilaiuas_inggris = $_POST['nilai_uas_inggris'];


    $nilaiharian_p = $_POST['nilai_harian_p'];
    $nilaitugas_p = $_POST['nilai_tugas_p'];
    $nilaiuts_p = $_POST['nilai_uts_p'];
    $nilaiuas_p = $_POST['nilai_uas_p'];

}

class rapot{
    public $rata;

    public function rata2($harian,$tugas,$uts, $uas){
        $this->rata = ($harian + $tugas + $uts + $uas) /4;
        echo "<td><center>".$this->rata."</center></td>";

        if($this->rata>75){
            echo  "<td><center>Lulus</center></td>";
        }else{
            echo "<td><center>Tidak Lulus</center></td>";
        }
    }

}
        $cetak = new rapot();

?>

    <br><br>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>: <?php echo $nama; ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?php echo $kelas; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?php echo $jurusan; ?></td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0" cellpading="0" width="40%">
            <tr>
                <td><center>Mapel</center></td>
                <td><center>Harian</center></td>
                <td><center>Tugas</center></td>
                <td><center>UTS</center></td>
                <td><center>UAS</center></td>
                <td><center>Rata - Rata</center></td>
                <td><center>Grade</center></td>
            </tr>
      
            <tr>
                <td><center>Matematika</center></td>
                <td><center><?php echo $nilaiharian_m; ?></center></td>
                <td><center><?php echo $nilaitugas_m; ?></center></td>
                <td><center><?php echo $nilaiuts_m; ?></center></td>
                <td><center><?php echo $nilaiuas_m; ?></center></td>
                <center><?php echo $cetak->rata2($nilaiharian_m, $nilaitugas_m, $nilaiuts_m, $nilaiuas_m);?></center>
            </tr>
            <tr>
                <td><center>Bahasa Indonesia</center></td>
                <td><center><?php echo $nilaiharian_indo ?></center></td>
                <td><center><?php echo $nilaitugas_indo ?></center></td>
                <td><center><?php echo $nilaiuts_indo ?></center></td>
                <td><center><?php echo $nilaiuas_indo ?></center></td>
                <center><?php echo $cetak->rata2($nilaiharian_indo, $nilaitugas_indo, $nilaiuts_indo, $nilaiuas_indo);?></center>
            </tr>
             <tr>
                <td><center>Bahasa Inggris</center></td>
                <td><center><?php echo $nilaiharian_inggris ?></center></td>
                <td><center><?php echo $nilaitugas_inggris ?></center></td>
                <td><center><?php echo $nilaiuts_inggris ?></center></td>
                <td><center><?php echo $nilaiuas_inggris ?></center></td>
                <center><?php echo $cetak->rata2($nilaiharian_inggris, $nilaitugas_inggris, $nilaiuts_inggris, $nilaiuas_inggris);?></center>
            </tr>
             <tr>
                <td><center>Produktif</center></td>
                <td><center><?php echo $nilaiharian_p ?></center></td>
                <td><center><?php echo $nilaitugas_p ?></center></td>
                <td><center><?php echo $nilaiuts_p ?></center></td>
                <td><center><?php echo $nilaiuas_p ?></center></td>
                <center><?php echo $cetak->rata2($nilaiharian_p, $nilaitugas_p, $nilaiuts_p, $nilaiuas_p);?></center>
            </tr>
        </table>
    </center>
</body>
</html>