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
                <li class="active">
                    <a href="#">AnaSayfa</a>
                </li>
                 <li >
                    <a href="siparisler.php">Siparişler</a>
                    
                </li>
                <li >
                    <a href="urun-girisi.php">Ürün / İndirim</a>
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
            <div class="card admin-card">
            <section class="dashboard-counts section-padding">
                <div class="container-fluid">
                  <div class="row">
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon "><i class="fas fa-chart-line gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">ENFLASYON ORANI</h5>
                             <h6 class="orta-baslik">Merkez Bankası</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="far fa-list-alt gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">SİPARİŞLER</h5>
                             <center><h6 class="orta-baslik">Son 2 Saat</h6>
                            <div class="count-number"> - </div></center>
                        </div>
                      </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="fas fa-truck-moving gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">Kargolar</h5>
                            <center><h6 class="orta-baslik">Son 3 Gün</h6>
                          <div class="count-number">3 Kargo</div></center>
                        </div>
                      </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="fas fa-lira-sign gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">TOPLAM GELİR</h5>
                           <center> <h6 class="orta-baslik">Son 2 gün</h6>
                          <div class="count-number">123 tl</div></center>
                        </div>
                      </div>
                    </div>
                    <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="far fa-window-restore gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">Stok Kontrol</h5>
                           <center> <h6 class="orta-baslik">Son 5 Gün</h6>
                          <div class="count-number">-</div></center>
                        </div>
                      </div>
                    </div>
                     <!-- Count item widget-->
                    <div class="col-xl-2 col-md-4 col-6">
                      <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="fas fa-chart-line gosterge-icon"></i></div>
                        <div class="name"><h5 class="text-uppercase ust-baslik">BORSA HAREKETLERİ</h5>
                           <center> <h6 class="orta-baslik">Merkez Bankası</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>

                <hr >

            <!--<h2>Anasayfa</h2>-->

            <div class="row">
                <div class="col-sm-12 col-md-6" style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #ff7838;">YILLIK VE AYLIK ENFLASYON ORANI</h4>
                    </div>
                    <div class="card text-left">
                        <?php
                            function getir($baslangic, $son, $cekilmek_istenen)
{
    @preg_match_all('/' . preg_quote($baslangic, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
    return @$m[1];
}

$url = "https://www.tcmb.gov.tr/wps/wcm/connect/TR/TCMB+TR/Main+Menu/Istatistikler/Enflasyon+Verileri/Tuketici+Fiyatlari";
$cekilen_veri = file_get_contents($url);
$ay = getir('<td style="height: 20px; width: 120px;">',"</td>",$cekilen_veri);
$yıl=getir('<td style="text-align: center; width: 140px;">',"</td>",$cekilen_veri);
$tufe=getir('<td style="text-align: center;">',"</td>",$cekilen_veri);
                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col'style='margin-left:10px;' >   <i class='far fa-calendar-alt'></i></th>";
                            echo "<th scope='col' ><i class='fas fa-percent'></i> YILLIK ENFLASYON</th>";
                            echo "<th scope='col'><i class='fas fa-percent'></i> AYLIK ENFLASYON</th>";
                             echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td > ".$ay[0]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[0]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[0]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[1]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[1]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[1]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[2]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[2]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[2]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[3]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[3]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[3]."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td > ".$ay[4]."</td>";
                            echo "<td style='padding-left:60px;'> ".$yıl[4]."</td>";
                            echo "<td style='padding-left:70px;'>"  .$tufe[4]."</td>";
                            echo "</tr>";
                            echo "</table>";

                        ?>



                    </div>
                </div>

                <div class="col-sm-12 col-md-6" style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #ff7838;">GÜNLÜK SATIŞ GELİRİ</h4>
                    </div>
                    <div class="card" style="width: 600px; height: 310px;">
                        <video style="width: 570px; height: 280px; padding-top: 4%;" controls>
                            <source src="resimler/organik.mp4"type="video/mp4">
                        </video>
                    </div>
                </div>


                
                <div class="col-sm-12 col-md-6" style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #ff7838;">YENİ MÜŞTERİLER</h4>
                    </div>
                    <div class="card text-left">
                        <?php
                            require 'php/baglan.php';
                            $sorgu=mysqli_query($baglan,"SELECT ad_soyad,telefon,e_posta from kullanici_kayit order by kullanici_id desc");
                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col'>AD-SOYAD</th>";
                            echo "<th scope='col'>TELEFON</th>";
                            echo "<th scope='col'style='padding-left : 8%;'>E-POSTA</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            while ($row = mysqli_fetch_array($sorgu)){
                                echo "<td style='text-transform: uppercase;'>".$row[0]."</td>";
                                echo "<td>".$row[1]."</td>";
                                echo "<td>".$row[2]."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                                                ?>
                    </div>
                </div>

                <div class="col col-sm-12 col-md-6 " style="margin-bottom: 5%; margin-top: 1.7%;">
                    <div class="card" style="margin-bottom: 0.3%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #ff7838;">YENİ SİPARİŞLER</h4>
                    </div>
                    <div class="card text-left">
                        <?php
                            require 'php/baglan.php';
                            $sorgu=mysqli_query($baglan,"SELECT urun_kayit.urun_ad,siparisler.siparis_kilo,siparisler.toplam_fiyat from urun_kayit,urun_siparis,siparisler where siparisler.siparis_id=urun_siparis.siparis_id and urun_siparis.urun_id=urun_kayit.urun_id");
                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col' >ÜRÜN ADI</th>";
                            echo "<th scope='col'>SİPARİŞ KİLOSU</th>";
                            echo "<th scope='col'>TOPLAM FİYAT</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            while ($row = mysqli_fetch_array($sorgu)){
                                echo "<td style='text-transform: uppercase;'>".$row[0]."</td>";
                                echo "<td style='padding-left : 10%;'>".$row[1]."</td>";
                                echo "<td style='padding-left : 10%;'>".$row[2]."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                                                ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">Müşterilerin Sık Ziyaret Ettiği Kısımlar</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">2 days ago</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title">Haftalık Rapor</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">2 days ago</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card" style="margin-bottom: 5%; margin-top: 1.7%;">
                        <h4 style="padding-top: 3%; padding-bottom: 0.8%; padding-left: 3%; color: #ff7838;">TÜKETİCİ FİYAT ENDEKSİ</h4>
                    </div>
                <?php
                             $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
                            $usd_buying = $connect_web->Currency[0]->BanknoteBuying;
                            $usd_selling = $connect_web->Currency[0]->BanknoteSelling;
                            $euro_buying = $connect_web->Currency[3]->BanknoteBuying;
                            $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
                            $dnr_buying = $connect_web->Currency[4]->BanknoteBuying;
                            $dnr_selling = $connect_web->Currency[4]->BanknoteSelling;
                            $str_buying = $connect_web->Currency[8]->BanknoteBuying;
                            $str_selling = $connect_web->Currency[8]->BanknoteSelling;
                            $jpn_buying = $connect_web->Currency[11]->BanknoteBuying;
                            $jpn_selling = $connect_web->Currency[11]->BanknoteSelling;

                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col' style='padding-left:16%;'><i class='fas fa-lira-sign'></i>ALIŞ</th>";
                            echo "<th scope='col'><i class='fas fa-lira-sign'></i>SATIŞ</th>";
                             echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            echo "<td ><i class='fas fa-euro-sign' ></i><span style ='color:#c3c3c3; margin-right:17px;'> EURO :</span> <label> ".$euro_buying."</label></td>";
                            echo "<td>"  .$euro_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><i class='fas fa-dollar-sign'></i><span style ='color:#c3c3c3; margin-right:14px;'> DOLAR :</span> <label>".$usd_buying."</label></td>";
                            echo "<td>".$usd_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><i class='fas fa-pound-sign'></i><span style ='color:#c3c3c3; margin-right:14px;'> STERLİN :</span> <label>".$str_buying."</label></td>";
                            echo "<td>".$str_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td><i class='fas fa-yen-sign'></i><span style ='color:#c3c3c3; margin-right:14px;'> JAPON :</span> <label>".$jpn_buying."</label></td>";
                            echo "<td>".$jpn_selling."</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>د.ك <span style ='color:#c3c3c3; margin-right:14px;'> DİNAR :</span> <label>".$dnr_buying."</label></td>";
                            echo "<td>".$dnr_selling."</td>";
                            echo "</tr>";
                            echo "</table>";

                            ?>
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