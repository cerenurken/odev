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
                    <a href="giderler.php">Giderler</a>
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
                    <a href="index.php" class="download">Çıkış</a>
                </li>
            </ul>
        </nav>




          <!-- icerik -->
         <div id="content">
            <br/>
            <BR>
          
                <hr >

            <!--
            <h1>urun girişi</h1>--->
<br>
            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left" style="width: 200%;">
                        <?php
                            require 'php/baglan.php';
                            $sorgu=mysqli_query($baglan,"SELECT kullanici_kayit.ad_soyad,urun_kayit.urun_ad,concat(siparisler.miktar,' ',siparisler.birim) siparis,(siparisler.miktar*siparisler.birim_fiyat) as tutar,kullanici_kayit.adres,kullanici_kayit.telefon,siparisler.ekleme_tarih
FROM kullanici_kayit,siparisler,urun_kayit WHERE kullanici_kayit.musteri_id=siparisler.musteri_id AND siparisler.urun_id=urun_kayit.urun_id ORDER BY  siparisler.siparis_id");
                            echo "<table class='table' >";
                            echo "<thead class='thead-dark'>";
                            echo "<tr >";
                            echo "<th scope='col'>Müşteri Ad</th>";
                            echo "<th scope='col'>Telefon</th>";
                            echo "<th scope='col'>Adres</th>";
                            echo "<th scope='col' >Ürün Ad</th>";
                            echo "<th scope='col' >Miktar</th>";
                            echo "<th scope='col' >Tutar</th>";
                            echo "<th scope='col' >Sipariş Tarihi</th>";
                            echo "<th scope='col' >Tedarik Et</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            while ($row = mysqli_fetch_array($sorgu)){
                                echo "<td style='text-transform: uppercase;'>".$row[0]."</td>";
                                echo "<td  >".$row[5]." </td>";
                                echo "<td style='font-size:13px;'> ".$row[4]."</td>";
                                echo "<td style='text-transform: uppercase;'>".$row[1]."</td>";
                                echo "<td  >".$row[2]." </td>";
                                echo "<td >".$row[3]. " <i class='fas fa-lira-sign'></i></td>";
                                echo "<td >".$row[6]. "</td>";
                                echo "<td>
                                  <h6 style='color:#34d10c;'><input type='radio' data-msg-required='Onayla / İptal Et' value='onay'>Göder</h6>
                                  <h6 style='color:#a40005;'><input type='radio' data-msg-required='Onayla / İptal Et' value='onay'> İptal</h6>
                                  </td>";
                                echo "</tr>";
                       
                                     }
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