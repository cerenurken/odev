<?php
	require 'baglan.php';
	$id = $_GET["id"];
	$sql = mysqli_query($baglan,"DELETE from kullanici_kayit where musteri_id=$id");
	if($sql){
		header("location:../kayit_musteri.php");
	}
	else{
		echo "Kayıt silinemedi";
	}
?>