<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <br><br>
        <img src="img/logosmk.png" alt="" width=15%>
        <center><h2>NILAI NILAI NASIONAL</h2></center>
        <table >
            <tr>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
             <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                   <label for="jurusan">
                        <select name="jurusan" id="">
                            <option value="RPL" name="jurusan">RPL</option>
                            <option value="TKRO" name="jurusan">TKRO</option>
                            <option value="TSM" name="jurusan">TSM</option>
                        </select>
                   </label>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><b>Nilai Ujian</b></td>
            </tr>
            <tr>
                <td>Nilai B.Indonesia</td>
                <td>:</td>
                <td><input type="number" name="nilai_indo"></td>
            </tr>
             <tr>
                <td>Nilai B.Inggris</td>
                <td>:</td>
                <td><input type="number" name="nilai_inggris"></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><input type="number" name="nilai_mtk"></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="nilai_produktif"></td>
            </tr>
            <tr>
               <td></td> 
               <td></td>
               <td><input type="submit" name="save" values="Simpan"></td>
            </tr>
        </table>
    </form>
    </center>    
</body>
</html>

<?php
if(isset($_POST['save'])){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $nilai_indo = $_POST ["nilai_indo"];
    $nilai_inggris = $_POST ["nilai_inggris"];
    $nilai_mtk = $_POST ["nilai_mtk"];
    $nilai_produktif = $_POST["nilai_produktif"];  

    echo "<br>";
    echo "<center>";
    echo "Nama : $nama <br>";
    echo "Kelas : $kelas <br>";
    echo "Jurusan : $jurusan <br>";
    echo "Nilai B.Indonesia : $nilai_indo <br>";
    echo "Nilai B.Inggris : $nilai_inggris <br>";
    echo "Nilai MTK : $nilai_mtk <br>";
    echo "Nilai Produktif : $nilai_produktif <br>";

    $hasil = $nilai_indo + $nilai_inggris + $nilai_mtk + $nilai_produktif;
    $hasil /=4;

    echo "Rata - Rata : $hasil <br>";

    
    if ($hasil > 75) {
    echo "Tuntas";
} else {
    echo "Tidak Tuntas";
}
echo "</center>";

}