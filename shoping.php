


<?php
include 'header.php';
?>
<body>
	<div class="container">
		
		<?php
			if($total_count > 0){?>
				<h2 class="text-center">Sepetinizdeki Ürünler</h2>
				<?php } else{?>
					<div class="alert alert-danger">
						<strong>Sepetinizde Henüz Bir Ürün Bulunmamaktadır.Ürün Eklemek İçin <a href="index.php">TIKLAYINIZ</a></strong>
					</div> 
				<?php } ?>
	
	<hr>
	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<table class="table tale-hover table-bordered table-striped">
				<thead>
					<td>Ürün Resmi</td>
					<th class="text-center">Ürün Adı</th>
					<th class="text-center">Fiyatı</th>
					<th class="text-center">Miktar</th>
					<th class="text-center">Birim</th>
					<th class="text-center">Toplam</th>
					<th class="text-center">Sepetten Çıkar</th>
				</thead>
				<tbody>
					<?php foreach ($urun_kayit as $urun){ ?>
						<tr>
						<td class="text-center" width="150">
							<img src="nar.png" alt="nar" width="50">
						</td>
						<td class="text-center"><?php echo $urun->urun_ad;?></td>
						<td class="text-center"><?php echo $urun->fiyat;?> TL</td>
						<td class="text-center">

							<a href="cart.php?p=incCount&urun_id=<?php echo $urun->urun_id; ?>" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-plus"></span>
							</a>

							<input type="text"class="item-count-input" value="<?php echo $urun->count;?>" >

							<a href="cart.php?p=decCount&urun_id=<?php echo $urun->urun_id; ?>" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-minus"></span>
							</a>
						</td>
						
						<td class="text-center"><?php echo $urun->birim;?></td>

						<td class="text-center"><?php echo $urun->total_price;?></td>
						<td class="text-center">
							<button product-id="<?php echo $urun->urun_id;?>" class="btn btn-danger btn-sm removeFromCartBtn">
								<span class="glyphicon glyphicon-remove"></span>Sepetten Çıkar
							</button>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<br>
					<th colspan="3" class="text-right">
						<!--Toplam Ürün : <span class="color-danger"><?php// echo $total_count ;?> Adet</span> -->
					</th>
					<th colspan="2" class="text-right">
						Toplam Tutar : <span class="color-danger"><?php echo $total_price;?>TL</span>
					</th>
					<th colspan="2" class="text-right">

						<form method="post" action="php/satinal.php">
							<?php foreach ($urun_kayit as $urun):  ?>

								 <input type="hidden" value="<?php echo $urun->urun_id;?>" name="urun_id[]" >
								 <input type="hidden" value="<?php echo $urun->count;?>" name="urun_miktar[]" >

							<?php endforeach ?>

							<button  type="submit" class="btn btn-success" style="width: 130px;">Satın Al</button>
						</form>

					</th>
				</tfoot>
			</table>
	</div>
</body>