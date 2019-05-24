<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT round((SELECT count(kullanici_kayit.cinsiyet) FROM kullanici_kayit WHERE kullanici_kayit.cinsiyet='Erkek') / (SELECT COUNT(kullanici_kayit.cinsiyet) )*100 ,2) as erkek ,round((SELECT count(kullanici_kayit.cinsiyet) FROM kullanici_kayit WHERE kullanici_kayit.cinsiyet='Kadın') / (SELECT COUNT(kullanici_kayit.cinsiyet) )*100 ,2) as kadin FROM kullanici_kayit ");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>

