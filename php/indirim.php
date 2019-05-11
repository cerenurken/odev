<?php

require 'baglan.php';
if ($_GET){

	if(isset($_GET["urun_ad"])){
		$ad = $_GET["urun_ad"];
	}

	if(isset($_GET["indirim_mik"])){
		$miktar = $_GET["indirim_mik"];
	}
	else{
		echo "indirim miktarı requesti olmadı";
	}


	if(isset($_GET["indrm_süre"])){
		$süre_b = $_GET["indrm_bas_süre"];
	}
	else{
		echo "indirim süresi requesti olmadı";
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

	$indirim_giris = "insert into indirim (stok_mik,urun_id,indirim_bas,indirim_son,guncel_fiyat) values('$miktar',$ad,'$süre_b','$süre','$fiyat')";
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