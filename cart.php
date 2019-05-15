<?php
include 'db.php';
session_start();


function addToCart($urun_item){

	if(isset($_SESSION["shoping"])){
		$shoping = $_SESSION["shoping"];
		$urun_kayit = $shoping["urun_kayit"];

	}else{
		$urun_kayit = array();
	}

//Sepetteki Ürünün Adet Kontrolü 
	if(array_key_exists($urun_item->urun_id,$urun_kayit)){
		$urun_kayit[$urun_item->urun_id]->count++;

	}else{
		$urun_kayit[$urun_item->urun_id]= $urun_item;
	}

//Sepet İçin Fiyat Hesaplaması

	$total_price=0.0;
	$total_count =0;

	foreach ($urun_kayit as $urun){
		$urun->total_price = $urun->count * $urun->fiyat;
		$total_price = $total_price + $urun->total_price;
		$total_count += $urun->count;
	}
	

	$summary["total_price"] = $total_price;
	$summary["total_count"] = $total_count;

	
	$_SESSION["shoping"]["urun_kayit"] = $urun_kayit;
	$_SESSION["shoping"]["summary"] = $summary;

	return $total_count;

}

function removeFromCart($urun_id){
	if(isset($_SESSION["shoping"])){
		$shoping = $_SESSION["shoping"];
		$urun_kayit = $shoping["urun_kayit"];


  //ürün listeden cıkar
		if(array_key_exists($urun_id,$urun_kayit)){
			unset($urun_kayit[$urun_id]);
		}
  // tekrardan sepet hesaplama
        $total_price=0.0;
		$total_count =0;

		foreach ($urun_kayit as $urun){
			$urun->total_price = $urun->count * $urun->fiyat;
			$total_price = $total_price + $urun->total_price;
			$total_count += $urun->count;
		}
		

		$summary["total_price"] = $total_price;
		$summary["total_count"] = $total_count;

		
		$_SESSION["shoping"]["urun_kayit"] = $urun_kayit;
		$_SESSION["shoping"]["summary"] = $summary;

		return true;




}

}


function incCount($urun_id){



	if(isset($_SESSION["shoping"])){
		$shoping = $_SESSION["shoping"];
		$urun_kayit = $shoping["urun_kayit"];

//Sepetteki Ürünün Adet Kontrolü 
		if(array_key_exists($urun_id,$urun_kayit)){
			$urun_kayit[$urun_id]->count++;

		}
//Sepet İçin Fiyat Hesaplaması

		$total_price=0.0;
		$total_count =0;

		foreach ($urun_kayit as $urun){
			$urun->total_price = $urun->count * $urun->fiyat;
			$total_price = $total_price + $urun->total_price;
			$total_count += $urun->count;
		}
		

		$summary["total_price"] = $total_price;
		$summary["total_count"] = $total_count;

		
		$_SESSION["shoping"]["urun_kayit"] = $urun_kayit;
		$_SESSION["shoping"]["summary"] = $summary;

		return true;


}

}

function decCount($urun_id){


	if(isset($_SESSION["shoping"])){
		$shoping = $_SESSION["shoping"];
		$urun_kayit = $shoping["urun_kayit"];
		
//Sepetteki Ürünün Adet Kontrolü 
		if(array_key_exists($urun_id,$urun_kayit)){
			$urun_kayit[$urun_id]->count--;

		}
//Sepet İçin Fiyat Hesaplaması

		$total_price=0.0;
		$total_count =0;

		foreach ($urun_kayit as $urun){
			$urun->total_price = $urun->count * $urun->fiyat;
			$total_price = $total_price + $urun->total_price;
			$total_count += $urun->count;
		}
		

		$summary["total_price"] = $total_price;
		$summary["total_count"] = $total_count;

		
		$_SESSION["shoping"]["urun_kayit"] = $urun_kayit;
		$_SESSION["shoping"]["summary"] = $summary;

		return true;


}

}



if(isset($_POST["p"])){
	$islem = $_POST["p"];
	if($islem == "addToCart"){
		$id = $_POST["product_id"];
		$urun = $db->query("SELECT * from urun_kayit where urun_id = {$id}",PDO::FETCH_OBJ)->fetch();
		$urun->count =1;
		echo addToCart($urun);




	}elseif($islem =="removeFromCart"){

		$id = $_POST["product_id"];
		echo removeFromCart($id);

	}
}

if(isset($_GET["p"])){
	$islem = $_GET["p"];
	if($islem == "incCount"){
		$id = $_GET["urun_id"];

		if(incCount($id)){
			header("Location: shoping.php");
		}

	}elseif($islem == "decCount"){
		$id =$_GET["urun_id"];
		if(decCount($id)){
			header("Location: shoping.php");
		}
	}
}

?>