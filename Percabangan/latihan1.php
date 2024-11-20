<?php

$nama = "Regita Puteri Oktaviani";
$kelas = "XI RPL 1";
$nilai_b_indonesia = 80;
$nilai_b_inggris = 90;
$nilai_mtk = 80;
$nilai_produktif = 80;

$hasil = $nilai_b_indonesia + $nilai_b_inggris + $nilai_mtk + $nilai_produktif;
$hasil /=4;

echo "<table>";
echo "<tr>";
echo "<td>Nama : $nama</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Kelas : $kelas</td>";
echo "</tr>";
echo "<tr>";    
echo "<td>Nilai Bahasa Indonesia : $nilai_b_indonesia</td>";
echo "</tr>";
echo "<td>Nilai Bahasa Inggris    : $nilai_b_inggris</td>";
echo "<tr>";
echo "<td> Nilai Produktif : $nilai_produktif</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Rata - Rata : $hasil</td>";
echo "</tr>";

echo "</table>";
if ($hasil > 75){
    echo "Anda Lulus";
} else{
    echo "Anda Tidak Lulus";
}
?>