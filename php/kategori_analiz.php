<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT SUM(siparisler.miktar*siparisler.birim_fiyat) as getiri,kategori.kategori_adi as ad,sum(urun_kayit.stok_miktari) as toplam
FROM kategori
LEFT JOIN urun_kayit
ON urun_kayit.kategori_id=kategori.kategori_id
LEFT JOIN siparisler
on urun_kayit.urun_id=siparisler.urun_id
GROUP BY kategori.kategori_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>