<?php 
include 'menubar/head.php';
?>
<body>

   <!-- mobile haeader nav  -->
    <nav class="navbar navbar-expand-lg navs-shadow d-block d-lg-none  sticky-top">
        <div class="row">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menü Küçült</span>
            </button>
            <h4 class="text-white">organicK | Admin</h4>
        </div>
    </nav>
  
    <div class="wrapper">
        <div id="main">
           <?php 
                include 'menubar/nav.php';
           ?>
            <!-- Sidebar  -->
    <nav id="sidebar">
        <ul class="list-unstyled components">
           	<li>
                <div class="row">
          	        <img class="fas fa-user rounded-circle mx-auto" style="border: 2px solid;width: 100px; margin-top: 45px; height: 100px;padding: 15px; margin-bottom: 30px;"/>
                </div>
            </li>
            <div class="row">
                <p class="mx-auto">Organik Amca</p>
            </div>
            <br />
            <li >
                <a href="admin.php">AnaSayfa</a>
            </li>
            <li>
                <a href="kayit_musteri.php">Müşteriler</a>
            </li>
            <li>
                <a href="siparisler.php">Siparişler</a>
            </li>
            <li class="active">
                <a href="#">Ürün Giriş </a>
            </li>
            
            <li >
                <a href="urun_guncel.php">Ürün Güncelleme</a>
            </li>
            <li >
                <a href="giderler.php">Giderler</a>
            </li>
            <li>
                <a href="analizler.php">Analizler</a>
            </li>
            
               <!-- <li>
                    <a href="profil.html">Profil</a>
                </li>
                <li>
                    <a href="iletisim.html">Gelen Kutusu</a>
                </li> -->
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="index.php" class="download">Çıkış</a>
            </li>
        </ul>
    </nav>
  
        <!-- icerik -->
    <div id="content">
        <br/>
        <BR>
        <hr >
		<!-- ürün Girisi baslangıcı -->
        <div class="row">
           	<div class="col-md-12 col-sm-12">
		    	<ul class="nav nav-tabs" role="tablist" id="myTab">
			        <li role="presentation" class="active">
			        	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
			        		<button type="button" class="btn btn-outline-info btn-lg" style="background-color: white;margin-left:25px;padding-left: 55px;padding-right: 60px;">Ürün Girişi</button>
			        	</a>
			        </li>

			        <li role="presentation">
			        	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
			        		<button type="button" class="btn btn-outline-info btn-lg" style="background-color: white;padding-left: 55px;padding-right: 60px;margin-bottom: 3px;">İndirim</button>
			        	</a>
			        </li>
		    	</ul>

    <!-- Tab panes -->
    		    <div class="tab-content">
        		    <div role="tabpanel" class="tab-pane active" id="home">
        		    	<div class="col-sm-12 col-md-12 ">
                            <div class="card text-left">
                                <form action="php/urun_giris.php" method="GET">
                                    <div class="form-group urun-konum">
                                        <label for="ad" class="text-uppercase urun-form"><i class="far fa-edit kisisel-icon"></i>Ürün Adı</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ." name="urun_ad">
                                    </div>
                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-align-left kisisel-icon"></i>Kategorİ</label>
                                                    <!--<input type="text" class="form-control form-kisisel" placeholder="Sebze,Meyve, ...">-->
                                        <select class="form-control urun-kisisel" id="sel1" name="kategori">
                                            <option value="0">Kategori Seçiniz</option>
                                            <option value="1">SEBZE</option>
                                            <option value="2">YEŞİLLİK</option>
                                            <option value="3">MEYVE</option>
                                            <option value="4">KURU BAKLİYAT</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-lira-sign kisisel-icon"></i>Fİyat</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="urun_fiyat">
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="far fa-window-restore kisisel-icon"></i>Stok Mİktar</label>
                                        <input type="text" class="form-control urun-kisisel kg" placeholder="KG / ADET . . ." name="urun_mik">
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-align-left kisisel-icon"></i>BİRİM</label>
                                                    <!--<input type="text" class="form-control form-kisisel" placeholder="Sebze,Meyve, ...">-->
                                        <select class="form-control urun-kisisel"  name="birim">
                                            <option value="0">Birim Seçiniz</option>
                                            <option value="kg">Kilogram</option>
                                            <option value="adet">Adet</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                            <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET"> 
                                    </div>
                            	</form>
                            </div>
        		    	</div>
        			</div>

        		    <div role="tabpanel" class="tab-pane" id="profile" style="margin-bottom: 5%;">
        		    	<div class="col-sm-12 col-md-12">
                            <div class="card text-left ">
                                <form action="php/indirim.php" method="GET">

                                    <div class="form-group urun-konum">
                                       <label for="ad" class="text-uppercase urun-form" ><i class="far fa-edit kisisel-icon"></i>Ürün Adı</label>
                                        <!--<input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ."  name="urun_ad"> -->
                                        <select class="form-control " name="urun_ad">
                                            <option value="">Ürün seçiniz</option>
                                                <?php 
                                                    include('php/baglan.php');
                                            		    $urunCek = "SELECT * from urun_kayit";
                                                    	$urunler = mysqli_query($baglan,$urunCek);
                                                    	while( $row = mysqli_fetch_assoc($urunler) ){
                                                            echo '<option value="'.$row["urun_id"].'">'.$row["urun_ad"].'</option>';
                                                        }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="far fa-window-restore kisisel-icon"></i>İndİrİm Stok Mİktarı</label>
                                        <input type="text" class="form-control urun-kisisel" placeholder="KG / ADET  . . ."name="indirim_mik">
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-hourglass-half kisisel-icon"></i>İndİrİm başlangıcı</label>
                                        <input type="date" class="form-control urun-kisisel" placeholder="GÜN  . . ." name="indrm_bas_süre">
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-hourglass-half kisisel-icon"></i>İndİrİm Sonu</label>
                                        <input type="date" class="form-control urun-kisisel" placeholder="GÜN  . . ." name="indrm_süre">
                                    </div>

                                    <div class="form-group">
                                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-lira-sign kisisel-icon"></i>Yenİ Fİyat</label>
                                        <input type="text" class="form-control urun-kisisel kg" placeholder="TL  . . ." name="guncel_fiyt">
                                    </div>
                                    <i class="fas fa-plus-circle"></i>
                                    <input type="submit" class="btnSubmit btn-success ürün-giris-buton" style="margin-bottom: 2%;" value="KAYDET" />
                                </form>
                            </div>
                        </div>
                   	</div>
    		    </div>

		    </div>

        </div>
    </div>
            

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

           
                $('[data-toggle="tooltip"]').tooltip();

                
           

        });
    </script>
</body>

</html>