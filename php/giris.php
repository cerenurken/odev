<?php

require 'baglan.php';

if ($_POST){
	
	if (isset( $_POST["giris_mail"])){
		$giris_mail=strip_tags(trim( $_POST["giris_mail"]));
	}
	else{
		echo "Ad / Soyad requesti olmadı.";
	}

	if (isset( $_POST["giris_pass"])){
		$giris_pass =strip_tags(trim( $_POST["giris_pass"]));
	}
	else{
		echo "Ad / Soyad requesti olmadı.";
	}

	$sorgu=mysqli_query($baglan,"select * from kullanici_kayit where e_posta='$giris_mail' and parola='$giris_pass'");

	if(mysqli_num_rows($sorgu)>0){
		header("Location:../kullanıcı.html");
	}else{
		echo "Kullanıcı adı veya parola yanlış..!";
	}

}

?>