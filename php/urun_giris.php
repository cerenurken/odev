<?php

require 'baglan.php';
if ($_POST){
	
	if (isset( $_POST["urun_ad"])){
		$urun=strip_tags(trim($_POST["urun_ad"]));
	}
	else{
		echo "Ürün adı requesti olmadı.";
	}

	if (isset($_POST["kategori"])){
		$kategori = strip_tags(trim($_POST["kategori"]));
	}
	else{
		echo "Kategori türü requesti olmadı";
	}

	if (isset($_POST["urun_fiyat"])){
		$urun_fiyat = strip_tags(trim($_POST["urun_fiyat"]));
	}
	else{
		echo "Ürün fiyatı requesti olmadı";
	}

	if (isset($_POST["urun_mik"])){
		$urun_mik = strip_tags(trim($_POST["urun_mik"]));
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