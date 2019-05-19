<?php

require 'baglan.php';

if ($_POST){
	
	
		$giris_mail=strip_tags(trim( $_POST["giris_mail"]));
		$giris_pass =strip_tags(trim( $_POST["giris_pass"]));

			$sorgu=mysqli_query($baglan,"select * from kullanici_kayit where e_posta='$giris_mail' and parola='$giris_pass'");

			if(mysqli_num_rows($sorgu)>0){
				while ($row = $sorgu->fetch_assoc()) {
					$_SESSION["user_id"]=$row["musteri_id"];
					echo $_SESSION["user_id"];

				}
	}

}

?>