<?php

require 'baglan.php';
if ($_GET){

	if(isset($_GET["urun_ad"])){
		$urun = $_GET["urun_ad"];
	}
	else{
		echo "ürün adı requesti olmadı";
	}

	if(isset($_GET["indirim_mik"])){
		$miktar = $_GET["indirim_mik"];
	}
	else{
		echo "indirim miktarı requesti olmadı";
	}

	if(isset($_GET["indrm_orani"])){
		$oran = $_GET["indrm_orani"];
	}
	else{
		echo " indirim oaranı requesti olmadı";
	}

	if(isset($_GET["indrm_süre"])){
		$süre = $_GET["indrm_süre"];
	}
	else{
		echo "indirim süresi requesti olmadı";
	}

	if(isset($_GET["guncel_fiyt"])){
		$fiyat = $_GET["guncel_fiyt"];
	}
	else{
		echo "gücel fiyat requesti olmadı";
	}

	$indirim_giris = "insert into urun_indirim (stok_mik,orani,indirim_son,guncel_fiyat) values('$miktar','$oran','$süre','$fiyat')";
		if ($baglan->query($indirim_giris)){
			echo "kayıt yapıldı";
		}
		else{
			echo "kayıt yapılamadı";
		}


}
else{
	die("veritabanı erişimi yok");
}


?>