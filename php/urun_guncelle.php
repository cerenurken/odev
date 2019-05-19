<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>organicK | Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/admin-panel.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    

</head>
<body>
       <nav class="navbar navbar-expand-lg navs-shadow d-block d-lg-none  sticky-top">
                <div class="row">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menü Küçült</span>
                    </button>
                    <h4 class="text-white">organicK | Admin</h4>
                </div>
            </nav>
          <!--#END_mobile haeader nav  -->


    <div class="wrapper">


        

        <!-- normal header nav  -->
        <div id="main">

            <div id="main">

           <?php 
                include '../menubar/nav.php';
           ?>


            <!-- Sidebar  -->
        <nav id="sidebar">
            

            <ul class="list-unstyled components">
                <li>
                        <div class="row">
                            <img class="fas fa-user rounded-circle mx-auto" style="border: 2px solid;width: 100px; margin-top: 30px; height: 100px;padding: 15px; margin-bottom: 30px;"/>
                        </div>
                </li>
                    <div class="row">
                        <p class="mx-auto">Organik Amca</p>
                    </div>
                    <br />
                </li>
                <li >
                    <a href="../admin.php">AnaSayfa</a>
                </li>
                <li>
                    <a href="../kayit_musteri.php">Müşteriler</a>
                </li>
                 <li  >
                    <a href="../siparisler.php">Siparişler</a>
                </li>
                <li >
                    <a href="../urun-girisi.php">Ürün Giriş</a>
                </li>
                <li class="active">
                    <a href="../urun_guncel.php">Ürün Güncelleme</a>
                </li>
                <li >
                    <a href="../giderler.php">Giderler</a>
                </li>
                
                <li>
                    <a href="../analizler.php">Analizler</a>
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





<?php

	require 'baglan.php';
	$id=$_GET["id"];
	$sql = mysqli_query($baglan,"SELECT * from urun_kayit where urun_id = '$id'");
	while ($row = mysqli_fetch_array($sql)) {
		$urun_id = $row["urun_id"];
		$urun_ad = $row["urun_ad"];
		$urun_fiyat = $row["fiyat"];
		$urun_stok = $row["stok_miktari"];

        
            echo'<form action="urun_duzenle.php?id='.$id.'" method="POST">
                    <div class="form-group urun-konum">
                        <label for="ad" class="text-uppercase urun-form"><i class="far fa-edit kisisel-icon"></i>Ürün Adı</label>
                        <input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ." value = "'.$urun_ad.'" name="urun_ad">
                    </div>

                    <div class="form-group">
                        <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-lira-sign kisisel-icon"></i>Fİyatı</label>
                        <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." value = "'.$urun_fiyat.'" name="urun_fiyat">
                    </div>

                    <div class="form-group">
                        <label for="soyad" class="text-uppercase urun-form"><i class="far fa-window-restore kisisel-icon"></i>Stok Mİktarı</label>
                        <input type="text" class="form-control urun-kisisel kg" placeholder="KG / ADET . . ." value = "'.$urun_stok.'" name="urun_mik">
                    </div><br>

                    <div class="form-group">
                        <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET"> 
                    </div>
                </form>';
                echo '<br><hr>';
	}
?>


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

           
                $('[data-toggle="tooltip"]').tooltip()
           

        });
    </script>
 </body>
 </html>