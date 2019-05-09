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
          <!--#END_mobile haeader nav  -->


    <div class="wrapper">


        

        <!-- normal header nav  -->
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
                </li>
                <li >
                    <a href="admin.php">AnaSayfa</a>
                </li>
                 <li  >
                    <a href="siparisler.php">Siparişler</a>
                </li>
                <li >
                    <a href="urun-girisi.php">Ürün Girişi</a>
                </li>
                 <li >
                    <a href="urun_guncel.php">Ürün Güncelleme</a>
                </li>
                <li>
                    <a href="analizler.php">Analizler</a>
                </li>
                <li>
                    <a href="haberler.php">Haberler</a>
                </li>
                <li class="active">
                    <a href="#">Profil</a>
                </li>
                <li>
                    <a href="iletisim.php">Gelen Kutusu</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="index.html" class="download">Çıkış</a>
                </li>
            </ul>
        </nav>

          
        <!-- icerik -->
         <div id="content">
            <br/>
            
         

                <hr >

            <!--
            <h1>profil</h1>-->

            <div class="row">
              <div class="col-sm-12 col-md-3 profil-duzen">
                <div class="card-header haber-baslik"><center>Profil Fotoğrafı</center></div>
                    <div class="card text-left">
                        <div class="col-lg-4 order-lg-1 text-center foto-yükle">
                            <img src="//placehold.it/150" class="foto-konum" alt="avatar">
                            
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input">
                                <span class="custom-file-control btn btn-success foto-sec">Fotoğraf Seç</span>
                             </label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7 profil-duzeni">
                <div class="card-header haber-baslik"><center>Kişisel Bilgiler</center></div>
                    <div class="card text-left">
                        <div class="form-group">
                            <label for="ad" class="text-uppercase kisisel-form"><i class="fas fa-user-circle  kisisel-icon"></i>Adınız</label>
                            <input type="text" class="form-control form-kisisel" placeholder="Adınız">
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="text-uppercase kisisel-form"><i class="fas fa-user-circle kisisel-icon"></i>Soyadınız</label>
                            <input type="text" class="form-control form-kisisel" placeholder="Soyadınız">
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="text-uppercase kisisel-form"><i class="fas fa-store kisisel-icon"></i>İşletme Adınız</label>
                            <input type="text" class="form-control form-kisisel" placeholder="İşletme Adınız">
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="text-uppercase kisisel-form"><i class="fas fa-phone kisisel-icon"></i>Telefonunuz</label>
                            <input type="text" class="form-control form-kisisel" placeholder="Telefonunuz">
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="text-uppercase kisisel-form"><i class="fas fa-envelope kisisel-icon"></i>E-Postanız</label>
                            <input type="email" class="form-control form-kisisel" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="text-uppercase kisisel-form"><i class="fas fa-map-marker-alt kisisel-icon"></i>Adresiniz</label>
                            <input type="text" class="form-control form-kisisel" placeholder="Adresiniz">
                        </div>
                        <div class="form-group">
                            <label for="comment" class="text-uppercase kisisel-form"><i class="far fa-address-card kisisel-icon"></i>Hakkınızda</label>
                            <textarea class="form-control form-kisisel" rows="5" placeholder="Hakkınızda"></textarea>
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

           
                $('[data-toggle="tooltip"]').tooltip()
           

        });
    </script>
</body>

</html>