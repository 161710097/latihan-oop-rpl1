<?php 
require_once 'konstruk.php';

$data = new data('Salman','Bandung','XI RPL 1','Menikah');

echo 'Namanya ..'.$data->namanya."<br>";
echo 'Tempat Lahir..'.$data->get_ttl()."<br>";
echo 'Kelas .. '.$data->get_kelas()."<br>";
echo 'Status..'.$data->get_status()."<br>";



 ?>