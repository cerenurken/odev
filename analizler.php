    <?php 
    require 'php/baglan.php';
    $sql = "SELECT kullanici_kayit.cinsiyet as ad,count(kullanici_kayit.musteri_id) as miktar FROM kullanici_kayit GROUP BY kullanici_kayit.cinsiyet";
    $res = $baglan->query($sql);

    $miktar="SELECT urun_kayit.stok_miktari as miktar,urun_ad AS ad,sum(siparisler.miktar) as siparis FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id
GROUP BY urun_kayit.urun_id  ";
$mik = $baglan->query($miktar);

    $kategori = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,kategori.kategori_adi as ad  FROM siparisler,urun_kayit,kategori WHERE siparisler.urun_id=urun_kayit.urun_id and urun_kayit.kategori_id=kategori.kategori_id GROUP BY kategori.kategori_id order by fiyat asc";
    $kat = $baglan->query($kategori);

    $gelir = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,urun_kayit.urun_ad as ad FROM siparisler,urun_kayit WHERE siparisler.urun_id=urun_kayit.urun_id  GROUP BY urun_kayit.urun_id ";
    $gel = $baglan->query($gelir);

    $urun = "SELECT sum(siparisler.birim_fiyat*siparisler.miktar) as fiyat,urun_kayit.urun_ad as ad FROM siparisler,urun_kayit,kategori WHERE siparisler.urun_id=urun_kayit.urun_id AND kategori.kategori_id=urun_kayit.kategori_id AND kategori.kategori_adi='meyve' GROUP BY urun_kayit.urun_id  order by fiyat asc";
    $urun = $baglan->query($urun);


    $gider = "SELECT Concat(MonthName(odeme_tarihi),' ',Year(odeme_tarihi)) as donem, sum(odemeler.toplam) as 'adet' From odemeler Group By Year(odeme_tarihi), Month(odeme_tarihi)
Order By odeme_tarihi";
    $gdr = $baglan->query($gider);

    $gelir="SELECT concat(MonthName(ekleme_tarih),' ',Year(ekleme_tarih)) as ay , sum(siparisler.miktar*siparisler.birim_fiyat) as'kar' FROM siparisler GROUP BY Year(ekleme_tarih), Month(ekleme_tarih)";
    $trh= $baglan->query($gelir);


    $stok ="SELECT urun_guncelleme.fiyat as eski,urun_kayit.fiyat as yeni ,urun_kayit.urun_ad as ad FROM urun_kayit,urun_guncelleme WHERE urun_kayit.urun_ad=urun_guncelleme.urun_ad";
    $stk = $baglan->query($stok);

     ?>



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
    <link rel="stylesheet" href="css/admin-panel.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>








    
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kadın', 'Erkek'],

          <?php
            while($row = $res->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["miktar"]."],";
            }



          ?>
        ]);

        var options = {
          title: 'Cinsiyet Dağılımı',
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>






    <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Ürünler', 'Stok Miktarı', 'Sipariş Miktarı'],

          <?php
            while($row = $mik->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["miktar"].",".$row["siparis"]."],";
            }



          ?>
            ]);

            var options = {title: 'Yıllık Stok - Sipariş Miktarı',
            height:350,
          width:620,
            backgroundColor:'#ececec',
            vAxis:{title:"Ürün"},
            hAxis:{title:"Miktar"}

        }; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.BarChart(document.getElementById('linechart'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>



    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php
            while($row = $kat->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["fiyat"]."],";
            }



          ?>
        ]);

        var options = {
          pieHole: 0.4,
          title: 'Kategorilere Göre Yıllık Gelir Oranı',
            height:350,
            width:620,
            backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php
            while($row = $urun->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["fiyat"]."],";
            }



          ?>
        ]);

        var options = {
          title: 'Çok Satan Kategorinin Ürünlere Göre Yıllık Gelir Oranı',
            height:350,
            width:620,
            backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('urun_katchart'));
        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kadın', 'Erkek'],

          <?php
            while($row = $gel->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["fiyat"]."],";
            }



          ?>
        ]);

        var options = {
          title: 'Ürünlere Göre Aylık Gelir Oranı',
          is3D: true,
          height:350,
          width:620,
          backgroundColor:'#ececec'
        };

        var chart = new google.visualization.PieChart(document.getElementById('urunchart'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gelir'],
          <?php
            while($row = $trh->fetch_assoc()){
                echo "['".$row["ay"]."',".$row["kar"]."],";
            }



          ?>

        ]);

        var options = {
          title: 'Aylara Göre Gelirler',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('trh'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Gider'],
          <?php
            while($row = $gdr->fetch_assoc()){
                echo "['".$row["donem"]."',".$row["adet"]."],";
            }



          ?>

        ]);

        var options = {
          title: 'Aylara Göre Giderler',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('gdr'));

        chart.draw(data, options);
      }
    </script>





<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Eski Fiyat',"Yeni Fiyat"],
          <?php
            while($row = $stk->fetch_assoc()){
                echo "['".$row["ad"]."',".$row["eski"].",".$row["yeni"]."],";
            }



          ?>

        ]);

        var options = {
          title: 'Ürünlerin Aylık Fiyat Değişimi',
          height:350,
          width:620,
          backgroundColor:'#ececec',
          curveType: 'function',
          legend: { position: 'bottom' },
          vAxis:{title:"TL"}
        };

        var chart = new google.visualization.LineChart(document.getElementById('stk'));

        chart.draw(data, options);
      }
    </script>
















</head>
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
                            <img src="resimler/images.jpg" class=" mx-auto" style="border: 2px solid;width: 100px; margin-top: 45px; height: 100px;padding: 15px; margin-bottom: 30px;"/>
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
                 <li  >
                    <a href="siparisler.php">Siparişler</a>
                </li>
                <li >
                    <a href="urun-girisi.php">Ürün Giriş</a>
                </li>
                <li >
                    <a href="urun_guncel.php">Ürün Güncelleme</a>
                </li>
                <li >
                    <a href="giderler.php">Giderler</a>
                </li>
                 
                <li class="active">
                    <a href="#">Analizler</a>
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
            <br/><BR>
            
          

                <hr >
                <br>

            <!--<h2>Anasayfa</h2>
            <h1>analizler</h1>-->

              <div class="row">
                
                
                <div class="col-sm-12 col-md-6">
                    <div id="urunchart" style="margin-bottom: 55px;" ></div>
                </div>


                <div class="col-sm-12 col-md-6">
                    <div id="linechart" style="margin-bottom: 55px;" ></div>
                </div>
                

                <div class="col-sm-12 col-md-6">
                    <div id="stk" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="donutchart" style="margin-bottom: 55px;" ></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="piechart" style="margin-bottom: 55px;"></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="urun_katchart" style="margin-bottom: 55px;" ></div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div id="trh" style="margin-bottom: 55px;"></div>
                </div>

                 <div class="col-sm-12 col-md-6">
                    <div id="gdr" style="margin-bottom: 55px;"></div>
                </div>

                

                

                


            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

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