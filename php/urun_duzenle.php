<?php
	require 'baglan.php';

	$id = $_GET["id"];

	$ad = $_POST["urun_ad"];
	$fiyat = $_POST["urun_fiyat"];
	$miktar = $_POST["urun_mik"];

	$sql = mysqli_query($baglan,"UPDATE urun_kayit SET urun_ad ='$ad' , fiyat = '$fiyat' , stok_miktari = '$miktar' WHERE urun_id = '$id'");
	if ($sql){
		header("location:../urun_guncel.php");
	}
	else{
		echo "Ürün Güncellemesi Gerçekleşmedi";
	}

?>