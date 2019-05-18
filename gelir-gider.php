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
            <li >
                <a href="urun-girisi">Ürün Giriş </a>
            </li>
            <li >
                <a href="urun_guncel.php">Ürün Güncelleme</a>
            </li>
            <li class="active">
                <a href="gelir-gider.php">Gelir / Gider</a>
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
        <h6 class="alert alert-danger">*Giderlerinizi aylık olarak giriniz.</h6>
        <hr >
		<!-- ürün Girisi baslangıcı -->
        <div class="row">
           	<div class="col-md-12 col-sm-12">
		    	<ul class="nav nav-tabs" role="tablist" id="myTab">
			        <li role="presentation" class="active">
			        	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
			        		<button type="button" class="btn btn-outline-info btn-lg" style="background-color: white;margin-left:25px;padding-left: 55px;padding-right: 60px;">Fatura Ödemeleri</button>
			        	</a>
			        </li>

			        <li role="presentation">
			        	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
			        		<button type="button" class="btn btn-outline-info btn-lg" style="background-color: white;padding-left: 55px;padding-right: 60px;margin-bottom: 3px;">Toplam Gelir</button>
			        	</a>
			        </li>
		    	</ul>

    <!-- Tab panes -->
    		    <div class="tab-content">
        		    <div role="tabpanel" class="tab-pane active" id="home">
        		    	<div class="col-sm-12 col-md-12 ">
                            <div class="card text-left">
                                <form action="php/giderler.php" method="GET">
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="far fa-file-alt kisisel-icon"></i>Fatura Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="fatura">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-male kisisel-icon"></i>Çalışan Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="odeme">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-car kisisel-icon"></i>Araç Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="arac">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="far fa-building kisisel-icon"></i>Ofİs Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="ofis">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-seedling kisisel-icon"></i>İlaçlama Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="ilac">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-seedling kisisel-icon"></i>Gİder Tarİhİ</label>
                                            <input type="date" class="form-control urun-kisisel" placeholder="TL  . . ." name="gider_t">
                                            
                                        </div>
                                        <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET" />
                                    </form>
                            </div>
        		    	</div>
        			</div>

        		    <div role="tabpanel" class="tab-pane" id="profile" style="margin-bottom: 5%;">
        		    	<div class="col-sm-12 col-md-12">
                            <div class="card text-left ">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Toplam Satılan Ürün Miktarı</th>
                                      <th scope="col">Satışlardan Elde Edilen Gelir</th>
                                      <th scope="col">Toplam Giderler</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                        require 'php/baglan.php';
                                        $ekle = mysqli_query($baglan,"SELECT sum(siparisler.siparis_kilo),sum(siparisler.toplam_fiyat) from siparisler");
                                        while ($listele = mysqli_fetch_array($ekle)) {
                                             echo "<td scope='row' >".$listele[0]." ".'Kilo / Adet'."</td>";
                                             echo "<td>".$listele[1].'TL'."</td>";
                                            }
                                        ?>
                                        <?php
                                        require 'php/baglan.php';
                                        $ekle = mysqli_query($baglan,"SELECT sum(odemeler.toplam) FROM odemeler");
                                        while ($listele = mysqli_fetch_array($ekle)) {
                                             echo "<td>".$listele[0].'TL'."</td>";
                                            }
                                        ?>
                                    </tr>
                                  </tbody>
                                </table>
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