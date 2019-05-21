<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT urun_guncelleme.fiyat as eski,urun_kayit.fiyat as yeni ,urun_kayit.urun_ad as ad FROM urun_kayit,urun_guncelleme WHERE urun_kayit.urun_ad=urun_guncelleme.urun_ad");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>