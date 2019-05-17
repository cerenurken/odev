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
                <li>
                    <a href="kayit_musteri.php">Müşteriler</a>
                </li>
                 <li class="active" >
                    <a href="#">Siparişler</a>
                </li>
                <li >
                    <a href="urun-girisi.php">Ürün Giriş</a>
                </li>
                
                 <li >
                    <a href="urun_guncel.php">Ürün Güncelleme</a>
                </li>
                <li >
                    <a href="gelir-gider.php">Gelir / Gider</a>
                </li>
                <li>
                    <a href="analizler.php">Analizler</a>
                </li>
                
                <!--<li>
                    <a href="profil.html">Profil</a>
                </li>
                <li>
                    <a href="iletisim.html">Gelen Kutusu</a>
                </li> -->
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
            
          <BR>

                <hr >

            <!--
            <h1>siparişler</h1>-->

            <div class="row">
                
                <div class="col-sm-12 col-md-12">
                    <div class="card-header siparis-baslik">Alınan Siparişleri <span style="color:#34d10c;">Onayla</span>/<span style="color:#a40005; "> İptal Et </span></div>
                    <div class="card text-left">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="padding-left: 50px;">Ürün Adı</th>
                                <th>Kilosu</th>
                                <th>Toplam Fiyatı</th>
                                <th style="padding-left: 23px;">Tarihi</th>
                                <th>Stok Miktarı</th>
                                <th style="padding-left: 20px;">Tedarik Durumu</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding-left: 50px;">Salatalık</td>
                                <td>5 KG</td>
                                <td style="padding-left: 40px;">30 TL</td>
                                <td>26.03.2019</td>
                                <td style="padding-left: 40px;"> 20</td>
                                <td><label for="register-male" class="radio control-inline cinsiyet">
                                  <input type="radio" name="signup_form" required="required" class="siparis_drurm" data-msg-required="Onayla / İptal Et" value="onay">
                                  <span style="color:#34d10c;">Onayla</span></label>
                                <label for="register-female" class="radio control-inline cinsiyet">
                                  <input type="radio"  name="signup_form" required="required" class="siparis_durum" data-msg-required="Onayla / İptal Et" value="iptal"> 
                                    <span style="color:#a40005; "> İptal Et </span></label></td>
                              </tr>

                              <tr>
                                <td style="padding-left: 50px;">Muz</td>
                                <td>4 KG</td>
                                <td style="padding-left: 40px;">28 TL</td>
                                <td>26.03.2019</td>
                                <td style="padding-left: 40px;">10</td>
                                <td><label for="register-male" class="radio control-inline cinsiyet">
                                  <input type="radio" name="signup_form" required="required" class="siparis_drurm" data-msg-required="Onayla / İptal Et" value="onay">
                                  <span style="color:#34d10c;">Onayla</span></label>
                                <label for="register-female" class="radio control-inline cinsiyet">
                                  <input type="radio"  name="signup_form" required="required" class="siparis_durum" data-msg-required="Onayla / İptal Et" value="iptal"> 
                                    <span style="color:#a40005; "> İptal Et </span></label></td>
                              </tr>

                              <tr>
                                <td style="padding-left: 50px;">Armut</td>
                                <td>2 KG</td>
                                <td style="padding-left: 40px;">7 TL</td>
                                <td>24.03.2019</td>
                                <td style="padding-left: 40px;">0</td>
                                <td><label for="register-male" class="radio control-inline cinsiyet">
                                  <input type="radio" name="signup_form" required="required" class="siparis_drurm" data-msg-required="Onayla / İptal Et" value="onay">
                                  <span style="color:#bbb6b7;">Onayla</span></label>
                                <label for="register-female" class="radio control-inline cinsiyet">
                                  <input type="radio"  name="signup_form" required="required" class="siparis_durum" data-msg-required="Onayla / İptal Et" value="iptal"> 
                                    <span style="color:#bbb6b7;"> İptal Et </span></label></td>
                              </tr>

                              <tr>
                                <td style="padding-left: 50px;">Elma Sirkesi</td>
                                <td>3 LT</td>
                                <td style="padding-left: 40px;">45 TL</td>
                                <td>24.03.2019</td>
                                <td style="padding-left: 40px;">0</td>
                                <td><label for="register-male" class="radio control-inline cinsiyet">
                                  <input type="radio" name="signup_form" required="required" class="siparis_drurm" data-msg-required="Onayla / İptal Et" value="onay">
                                  <span style="color:#bbb6b7;">Onayla</span></label>
                                <label for="register-female" class="radio control-inline cinsiyet">
                                  <input type="radio"  name="signup_form" required="required" class="siparis_durum" data-msg-required="Onayla / İptal Et" value="iptal"> 
                                    <span style="color:#bbb6b7;"> İptal Et </span></label></td>
                              </tr>
                              
                              <tr>
                                  <td style="padding-left: 30px;"><i class="fas fa-plus-circle" style="color: #186604;"></i>...</td>
                                  <td></td>
                                  <td></td>
                                  <td ></td>
                                  <td></td>
                                  <td></td>
                              </tr>
                            </tbody>
                          </table>
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