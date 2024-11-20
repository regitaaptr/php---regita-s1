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
        <center><h2>BIODATA DIRI</h2></center>
        <table>
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

    echo "<br>";
    echo "<center>";
    echo "Nama Lengkap : $nama <br>";
    echo "Kelas : $kelas";
    echo "</center>";
}
?>