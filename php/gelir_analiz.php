<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT (sum(siparisler.miktar)*siparisler.birim_fiyat) as fiyat,urun_kayit.urun_ad as ad FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id
GROUP BY urun_kayit.urun_id
ORDER BY fiyat DESC");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>