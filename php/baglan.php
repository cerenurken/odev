<?php
	$baglan=mysqli_connect("localhost","root","","organicK");

		// Bağlantı Kontrolü
	if (mysqli_connect_errno())
	  {
	  echo "Bağlantı Yapılamadı.Veritabanı Hatası !:" . mysqli_connect_error();
	  }
	//Türkçe Karakter Sorunu Çözümü
	$baglan->set_charset("utf8");
	$baglan->query('SET NAMES utf8');
?>