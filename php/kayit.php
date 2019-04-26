<?php

require 'baglan.php';
if ($_POST){
	
	if (isset( $_POST["ad"])){
		$ad=strip_tags(trim($_POST["ad"]));
	}
	else{
		echo "Ad / Soyad requesti olmadı.";
	}

	if (isset($_POST["no"])){
		$no = strip_tags(trim($_POST["no"]));
	}
	else{
		echo "Telefon numarası requesti olmadı";
	}

	if (isset($_POST["email"])){
		$email =strip_tags(trim($_POST ["email"]));
	}
	else{
		echo "E-Posta requesti olmadı";
	}

	if (isset($_POST["date"])){
		$date = strip_tags(trim($_POST["date"]));
	}
	else{
		echo "Tarih requesti olmadı";
	}

	if (isset($_POST["pass"])){
		$pass  = strip_tags(trim($_POST["pass"]));
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

	if (isset($_POST["secenek"])){
		$sec = strip_tags(trim($_POST["secenek"]));
	}
	else{
		echo "Kayıt türü requesti olmadı";
	}
	
	$ekle ="insert into kullanici_kayit(ad_soyad,telefon,e_posta,dogum_tarihi,parola,cinsiyet,role_id) values('$ad','$no','$email','$date','$pass','$cins','$sec')";
		if ($baglan->query($ekle)){
			echo "kayıt yapıldı";
		}
		else{
			echo "kayıt yapılamadı";
		}
}
else{
	echo "sayfa bağlantısı yok";
}



?>
