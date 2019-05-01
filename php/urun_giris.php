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
	$urun_giris ="insert into urun_giris (urun_ad,kategori_id,fiyat,stok_miktari) values('$urun','$kategori','$urun_fiyat','$urun_mik')";
		if ($baglan->query($urun_giris)){
			echo "kayıt yapıldı";
		}
		else{
			echo "kayıt yapılamadı";
		}

}
else{
	die("vt baglantısı yok");
}
?>