<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT sum(stok_miktari) as sayi,kategori_adi as kategori FROM urun_kayit,kategori where urun_kayit.kategori_id = kategori.kategori_id group by kategori");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>