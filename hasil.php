<?php 
echo "======================== <br>";
echo "perhitungan bilangan 21 dengan 3 <br>";
echo "========================<br>";
require_once 'penghitungan.php';
$penjumlahan = new penghitung;
$penjumlahan -> set_penjumlahan(21,3);
echo "penjumlahan = ".$penjumlahan-> get_penjumlahan();
echo "<br>";
echo "pengurangan = ".$penjumlahan-> get_pengurangan();
echo "<br>";
echo "perkalian = ".$penjumlahan-> get_perkalian();
echo "<br>";
echo "pembagian = ".$penjumlahan-> get_pembagian();
echo "<br>"; 

 ?>
