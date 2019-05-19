<?php

require 'baglan.php';
if ($_GET){
	
	if (isset( $_GET["urun_ad"])){
		$urun = $_GET["urun_ad"];
	}
	else{
		echo "Ürün adı requesti olmadı.";
	}

	if (isset($_GET["kategori"])){
		$kategori = $_GET["kategori"];
	}
	else{
		echo "Kategori türü requesti olmadı";
	}

	if (isset($_GET["urun_fiyat"])){
		$urun_fiyat = $_GET["urun_fiyat"];
	}
	else{
		echo "Ürün fiyatı requesti olmadı";
	}

	if (isset($_GET["urun_mik"])){
		$urun_mik = $_GET["urun_mik"];
	}
	else{
		echo "Ürün miktarı requesti olmadı";
	}
	if (isset($_GET["birim"])){
		$birimi = $_GET["birim"];
	}
	else{
		echo "Birim türü requesti olmadı";
	}

	$result = mysqli_query($baglan,"SELECT * FROM urun_kayit WHERE urun_ad='$urun' LIMIT 1");
	$num_rows = mysqli_num_rows($result);
	 
	if ($num_rows > 0) {
	  echo "kayıt mevcut";
	}
	else{
		$urun_giris ="insert into urun_kayit (urun_ad,kategori_id,fiyat,birim,stok_miktari) values('$urun','$kategori','$urun_fiyat','$birimi','$urun_mik')";
		if ($baglan->query($urun_giris)){
			header("location:../urun_guncel.php");
		}
		else{
			echo "kayıt yapılamadı";
		}
	}
	

}
else{
	die("vt baglantısı yok");
}
?>