<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT count(kullanici_id) as sayi,cinsiyet FROM kullanici_kayit group by cinsiyet");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>