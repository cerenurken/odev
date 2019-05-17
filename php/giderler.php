<?php
	require 'baglan.php';

	if ($_GET){

		if(isset($_GET["fatura"])){
			$fatura_g = $_GET["fatura"];
		}
		else{
			echo "Fatura requesti olmadı";
		}

		if(isset($_GET["odeme"])){
			$odeme_g = $_GET["odeme"];
		}
		else{
			echo "Ödeme requesti olmadı";
		}

		if(isset($_GET["arac"])){
			$arac_g = $_GET["arac"];
		}
		else{
			echo "Araç gideri requesti olmadı";
		}

		if(isset($_GET["ofis"])){
			$ofis_g = $_GET["ofis"];
		}
		else{
			echo "Ofis gideri requesti olmadı";
		}

		if(isset($_GET["ilac"])){
			$ilac_g = $_GET["ilac"];
		}
		else{
			echo "İlaç gideri requesti olmadı";
		}

		$giderler = "insert into odemeler (fatura,calisan,arac,ofis,ilaclama) values ('$fatura_g','$odeme_g','$arac_g','$ofis_g','$ilac_g')";

		if ($baglan->query($giderler)){
			echo "kayıt yapıldı";
		}
		else{
			echo " kayıt yapılamadı :(";
		}
	}
	else{
		die("veritabanı bağlantısı yok");
	}

?>