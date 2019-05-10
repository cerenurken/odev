<?php
	require 'baglan.php';
	$id=$_GET["id"];
	$sql = mysqli_query($baglan,"SELECT * from urun_kayit where urun_id = '$id'");
	while ($row = mysqli_fetch_array($sql)) {
		$urun_id = $row["urun_id"];
		$urun_ad = $row["urun_ad"];
		$urun_fiyat = $row["fiyat"];
		$urun_stok = $row["stok_miktari"];


		echo '<form action="urun_duzenle.php?id='.$id.'" method="POST">
                <div class="form-group urun-konum">
                    <label >ÜRÜN ADI</label>
                    <input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ." value = "'.$urun_ad.'"name="urun_ad">
                </div>

                <div class="form-group">
                    <label >FİYATI</label>
                    <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ."value = "'.$urun_fiyat.'" name="urun_fiyat">
                </div>
                
                <div class="form-group">
                    <label >STOK MİKTARI</label>
                    <input type="text" class="form-control urun-kisisel kg" placeholder="KG / ADET . . ." value = "'.$urun_stok.'" name="urun_mik">
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET"> 
                </div>
            </form>';
	}
?>