<?php

require 'baglan.php';
if ($_POST){
	
	if (isset( $_POST["adi"])){
		$ad=strip_tags(trim($_POST["adi"]));
	}
	else{
		echo "Ad / Soyad requesti olmadı.";
	}

	if (isset($_POST["tel"])){
		$no = strip_tags(trim($_POST["tel"]));
	}
	else{
		echo "Telefon numarası requesti olmadı";
	}

	if (isset($_POST["mail"])){
		$email =strip_tags(trim($_POST ["mail"]));
	}
	else{
		echo "E-Posta requesti olmadı";
	}

	if (isset($_POST["adres"])){
		$adres =strip_tags(trim($_POST ["adres"]));
	}
	else{
		echo "E-Posta requesti olmadı";
	}

	if (isset($_POST["tarih"])){
		$date = strip_tags(trim($_POST["tarih"]));
	}
	else{
		echo "Tarih requesti olmadı";
	}

	if (isset($_POST["sifre"])){
		$pass  = strip_tags(trim($_POST["sifre"]));
	}
	else{
		echo "Şifre requesti olmadı";
	}

	if (isset($_POST["signup_form"])){
		$cins = strip_tags(trim($_POST["signup_form"]));
	}
	else{
		echo "Cinsiyet requesti olmadı";
	}

	
	$ekle ="insert into kullanici_kayit(ad_soyad,telefon,e_posta,adres,dogum_tarihi,parola,cinsiyet) values('$ad','$no','$email','$adres','$date','$pass','$cins')";
		if ($baglan->query($ekle)){
			
			header("Location:../index.php");
		}
		else{
			echo "kayıt yapılamadı";
		}
}
else{
	echo "sayfa bağlantısı yok";
}



?>
