<?php
	
require '../db.php';

$sepet_urunler = array();

$_SESSION["user_id"] = 37; 

$counter = 0;
foreach ($_POST as $k => $v) {
	$sepet_urunler[$counter]["id"]= $_POST['urun_id'][$counter];
	$sepet_urunler[$counter]["miktar"]= $_POST['urun_miktar'][$counter];
	$counter +=1;
}
//sepet urunler hazırlandı...

foreach ($sepet_urunler as $v) {
	$sql = "SELECT * from urun_kayit where urun_id=".$v['id'];
	$urun = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
	
	//urunler kaytiçin olusturuluyor....
	$olusturulan_urun = siparisUrun_olustur($urun,$v);

	$dbYaz_status = siparis_yaz($db,$olusturulan_urun);
	var_dump($dbYaz_status);
	if(!$dbYaz_status){
		echo "db kayıt hata";
		exit();
	}
}
header('location: siparislerim.php'); // enson işlem




function siparisUrun_olustur($urun,$sepet_urun){

	$olusturulan_urun = [
		'urun_id'    => $urun["urun_id"],
		'miktar'	 => $sepet_urun["miktar"],
		"birim"	     => $urun["birim"],
		"birim_fiyat"=> $urun["fiyat"],
	];

	return $olusturulan_urun;

}

function siparis_yaz($db,$urun){
	$sql = "INSERT INTO siparisler (musteri_id, urun_id, miktar, birim, birim_fiyat) VALUES (:musteri_id, :urun_id, :miktar, :birim, :birim_fiyat)";

	$db_yaz = $db->prepare($sql);

    return $db_yaz->execute([
		':musteri_id' => $_SESSION['user_id'],
		':urun_id'    => $urun["urun_id"],
		':miktar'	  => $urun["miktar"],
		":birim"	  => $urun["birim"],
		":birim_fiyat" => $urun["birim_fiyat"],
	]);
}