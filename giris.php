<?php
	if($_POST){
		echo "Bağlantı Yapıldı";
		
		if (isset($_POST["email"])){
			$email=strip_tags(trim($_POST["email"]));
		}
		else{
			echo "Kullanıcı Gelmedi!";
		}
		if(isset($_POST["sifre"])){
			$sifre=strip_tags(trim($_POST["sifre"]));
		}
		else{
			echo "Şifre Gelmedi !";
		}
		echo "E-Mail adresiniz : ".$email;
		echo "</br> Şifreniz : ".$sifre;
	}
	else{
			echo "Bağlantı Yapılamadı :(";
		}
	
?>