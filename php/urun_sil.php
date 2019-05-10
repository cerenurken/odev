<?php
	require 'baglan.php';
	$id = $_GET["id"];
	$sql = mysqli_query($baglan,"DELETE from urun_kayit where urun_id=$id");
	if($sql){
		echo "kayıt silindi";
	}
	else{
		echo "haberler silinemedi";
	}
?>