<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang"></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>


<?php
if (isset($_POST['hitung'])) {
    // deklarasi variable

    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class persegip{
        public $luas;

        public function luas_pp($p, $l){
            $this->luas = $p * $l;

            echo "panjang : " .$p. "<br>";
            echo "lebar : " .$l. "<br>";
            echo "Luasnya : " . $this->luas . "<br>";
        }
    }

    $cetak = new persegip();
    echo $cetak->luas_pp($panjang, $lebar);
}