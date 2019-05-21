<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT urun_kayit.stok_miktari as miktar,urun_ad AS ad,sum(siparisler.miktar) as siparis FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id
GROUP BY urun_kayit.urun_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>