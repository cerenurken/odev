<?php
header('Content-Type:application/json');
require 'baglan.php';
$sorgu=mysqli_query($baglan,"SELECT odeme_tarihi,toplam FROM odemeler");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglan);
echo json_encode($data);


?>
