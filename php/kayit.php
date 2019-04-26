<?php

require 'baglan.php';
$ad= $_POST["ad"] ;
$no = $_POST["no"];
$email = $_POST ["email"];
$date = $_POST["date"];
$pass =$_POST["pass"];
$cins= $_POST["signup_form"];
$sec= $_POST["secenek"];
$ekle ="insert into kullanici_kayit(ad_soyad,telefon,e_posta,dogum_tarihi,parola,cinsiyet,role_id) values('$ad','$no','$email','$date','$pass','$cins','$sec')";
	if ($baglan->query($ekle)){
		echo "kayıt yapıldı";
	}
	else{
		echo "kayıt yapılamadı";
	}



?>
