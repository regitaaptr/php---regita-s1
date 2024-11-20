<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPOT</title>
</head>
<body>
    <form action="latihan11h.php" method="post">
    <center>
        <h2>Rapot Siswa</h2>
<!-- wadah tabel -->
        <table>
            <tr>
                <td>Nama</td>
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
                    <select name="jurusan" id="">
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    </select>
                </td>
            </tr>

            <!-- tabel mtk -->
        <table>
            <tr>
                <td><center><h2>Nilai Matematika</h2></center></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nilai_harian_matematika"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="nilai_tugas_matematika"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uts_matematika"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uas_matematika"></td>
            </tr>
        </table>
         <table>
            <tr>
                <td><center><h2>Nilai Indonesia</h2></center></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nilai_harian_indo"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="nilai_tugas_indo"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uts_indo"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uas_indo"></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><center><h2>Nilai Inggris</h2></center></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nilai_harian_inggris"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="nilai_tugas_inggris"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uts_inggris"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uas_inggris"></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><center><h2>Nilai Produktif</h2></center></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="nilai_harian_p"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="nilai_tugas_p"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uts_p"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="nilai_uas_p"></td>
            </tr>
        </table>

        <tr>
            <td></td>
            <td><input type="submit" name="save" value="SAVE"></td>
            <td></td>
        </tr>
    </table>
    <!-- wadah tabel -->
</center>
</form>
</body>
</html>