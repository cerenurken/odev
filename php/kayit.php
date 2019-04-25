<?php

require 'baglan.php';
if ($_POST) {
	if(isset($_POST["email"])){
		$email=strip_tags(trim($_POST["email"]));
	}
	else{
		echo "lütfen epostanızı giriniz";
	}
	if  (isset($_POST["pass"])){
		$pass=strip_tags(trim($_POST["pass"]));
	}
	else{
		echo "lütfen sirenizi girin";
	}
	if($baglan){
		echo "veritabanı erişimi sağlandı";
		$sorgu=mysqli_query($baglan,"select * from kullanici_kayit");
	}
	else{
		die("veritabanı yok")
	}
}
else{
	echo "sayfa baglantısı yok";
}

?>
