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
                <li class="active">
                    <a href="#">Haberler</a>
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
                    <a href="index.html" class="download">Çıkış</a>
                </li>
            </ul>
        </nav>

          
        <!-- icerik -->
         <div id="content">
            <br/>
            
          

                <hr >

            <!--<h2>Anasayfa</h2>-->

        <div class="row">
                
                <div class="col-sm-12 col-md-6 haber-cards">
                    <div class="card text-left ">
                        <div class="card-header haber-baslik">İl Müdürü Ağaç Budamayı Uygulamalı Gösterdi</div>
                        <div class="card">
                          <div class="card-block haber-admin">
                            <img src="resimler/haberler/haber1.png" alt="haber" class="img-fluid haber-resim" />
                            <div class="card-text haber-detay">
                                Diyarbakır Tarım ve Orman İl Müdürü Mustafa Ertan Atalar, İl Müdür Yardımcısı Mehmet Hüseyinoğlu, Dicle İlçe Müdür Vekili Rıfat Arık İle Teknik personellerce Dicle İlçesi Bademli Mahallesi çiftçilerine budamaya yönelik ziyaret gerçekleştirdi. Diyarbakır Tarım ve Orman İl Müdürü Mustafa Ertan Atalar buradaki çiftçilerle bir süre sohbet ettikten sonra meyve ağaçlarında budamanın nasıl ve hangi dönemlerde yapılacağını anlattı.
                            </div>
                          </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="https://www.tarimdanhaber.com/haber/egitim/il-muduru-agac-budamayi-uygulamali-gosterdi/haber_id=11779" class="btn btn-success haber_buton">Devamı <i class="fas fa-forward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 haber-cards">
                    <div class="card text-left ">
                        <div class="card-header haber-baslik">Konya Tarım Fuarı ihracata %20 Katkı Sağladı</div>
                        <div class="card">
                          <div class="card-block haber-admin">
                            <img src="resimler/haberler/haber2.png" alt="haber" class="img-fluid haber-resim" />
                            <div class="card-text haber-detay">
                                19 - 23 Mart 2019 tarihleri arasında Konya Ticaret Odası – Tüyap Konya Uluslararası Fuar Merkezi'nde gerçekleştirilen Konya Tarım 2019 17. Tarım, Tarımsal Mekanizasyon ve Tarla Teknolojileri Fuarı bir kez daha yabancı ziyaretçi rekoru kırdı.
                                20 ülkeden 441 katılımcı firma ve firma temsilciliğinin tarımsal mekanizasyon alanında en yeni ürünlerini sergiledikleri Konya Tarım Fuarı'nda 101 ülkeden ve Türkiye'nin 72 şehrinden 304.855 profesyonel ziyaretçi ağırlandı.
                            </div>
                          </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="https://www.tarimdanhaber.com/haber/egitim/il-muduru-agac-budamayi-uygulamali-gosterdi/haber_id=11779" class="btn btn-success haber_buton">Devamı <i class="fas fa-forward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 haber-cards">
                    <div class="card text-left ">
                        <div class="card-header haber-baslik">Tarım Makinaları İhracatında Rekor Kırıldı</div>
                        <div class="card">
                          <div class="card-block haber-admin">
                            <img src="resimler/haberler/haber3.png" alt="haber" class="img-fluid haber-resim" />
                            <div class="card-text haber-detay">
                                Türk Tarım Alet ve Makinaları İmalatçıları Birliği (TARMAKBİR) Genel Sekreteri M. Selami İleri, yaptığı açıklamada tarım makinaları sektöründe 2019 yılı ihracatının, 2018 yılı seviyesine göre yüzde 37 artarak 137 milyon dolar seviyesine ulaştığını kaydetti.
                                Makina Sektöründe 2019 yılı Ocak-Şubat dönemi dış ticaret verileri açıklandı.
                            </div>
                          </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="https://www.tarimdanhaber.com/haber/egitim/il-muduru-agac-budamayi-uygulamali-gosterdi/haber_id=11779" class="btn btn-success haber_buton">Devamı <i class="fas fa-forward"></i></a>
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