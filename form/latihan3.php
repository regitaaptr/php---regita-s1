<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata diri</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <br><br>
        <img src="img/logosmk.png" alt="" width=15%>
        <center><h2>FORM BIODATA DIRI</h2></center>
        <table >
            <tr>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
             <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <label for="jk">
                    <input type="radio" name="jk" value='laki-laki'>Laki - Laki 
                    <input type="radio" name="jk" value='perempuan'>Perempuan
                </label>
                </td>   
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols=30 rows=5></textarea></td>
            </tr>   
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <label for="agama">
                        <select name="agm" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>Pendidikan terakhir</td>
                <td>:</td>
                <td>
                    <label for="pt">
                        <select name="pkt" id="">
                            <option value="sd">Sd</option>
                            <option value="smp">Smp</option>
                            <option value="mts">Mts</option>
                            <option value="smp">Smk</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <label for="status">
                        <select name="st" id="">
                            <option value="hts">Hts</option>
                            <option value="jomblo">jomblo</option>
                            <option value="sm">Sudah Menikah</option>
                            <option value="J">Janda</option>
                            <option value="d">Duda</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <label for="hobi">
                        <input type="checkbox" name="hobi" value='membaca'> Membaca
                        <input type="checkbox" name="hobi" value='menulis'> Menulis
                        <input type="checkbox" name="hobi" value='ngepush'> Ngepush
                    </label>
                </td>
            </tr>
            <tr>
                <td>Cita - Cita</td>
                <td>:</td>
                <td>
                   <label for="cita2">
                        <select name="cita" id="">
                            <option value="programmer">Programmer</option>
                            <option value="pns">PNS</option>
                            <option value="ceo">CEO</option>
                            <option value="owner">Owner</option>
                        </select>
                   </label>
                </td>
            </tr>
            <tr>
                <td>Kata - Kata Hari ini</td>
                <td>:</td>
                <td><textarea name="kata2" id="" cols="30" rows=5></textarea></td>
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
    $tempat = $_POST["tempat"];
    $tgl = $_POST["tanggal"];
    $jk = $_POST["jk"];
    $agama = $_POST ["agm"];
    $pt = $_POST ["pkt"];
    $status = $_POST["st"];
    $hobi = $_POST["hobi"];
    $cita2 = $_POST ["cita"];
    $kata2 = $_POST ["kata2"];

    echo "<br>";
    echo "<center>";
    echo "Nama Lengkap : $nama <br>";
    echo "Tempat Lahir : $tempat <br>";
    echo "Tanggal Lahir : $tgl <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $pt <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita - Cita : $cita2 <br>";
    echo "Kata Kata Hari ini : $kata2 <br>";    
    echo "</center>";
}
?>