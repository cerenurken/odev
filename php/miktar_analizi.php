<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT urun_kayit.stok_miktari as miktar,urun_ad AS ad  FROM urun_kayit order by  urun_kayit.stok_miktari DESC");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>