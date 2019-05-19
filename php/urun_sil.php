<?php
	require 'baglan.php';
	$id = $_GET["id"];
	$sql = mysqli_query($baglan,"DELETE from urun_kayit where urun_id='$id'");
	if($sql){
		header("location:../urun_guncel.php");
	}
	else{
		echo "haberler silinemedi";
	}
?>