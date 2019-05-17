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
                <li class="active">
                    <a href="#">Müşteriler</a>
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
                    <a href="index.html" class="download">Çıkış</a>
                </li>
            </ul>
        </nav>

          
        <!-- icerik -->
         <div id="content">
            <br/>
            
          <BR>

                <hr >

            <!--<h2>Anasayfa</h2>

          <h1>urun girişi</h1>--->

            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left" style="width: 200%;">
                        <?php
                            require 'php/baglan.php';
                            $sorgu=mysqli_query($baglan,"SELECT * from kullanici_kayit ");
                            echo "<table class='table' >";
                            echo "<thead class='thead-dark'>";
                            echo "<tr >";
                            echo "<th scope='col' style='padding-left:3%;'>AD SOYAD</th>";
                            echo "<th scope='col' style='padding-left:3%;'>TELEFON</th>";
                            echo "<th scope='col' style='padding-left:5%;'>E-POSTA</th>";
                            echo "<th scope='col' style='padding-left:2%;'>DOĞUM TARİHİ</th>";
                            echo "<th scope='col' style='padding-left:4%;'>SİL</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            while ($row = mysqli_fetch_array($sorgu)){
                                echo "<td style='text-transform: uppercase;padding-left:3%;'>".$row[1]."</td>";
                                echo "<td style='padding-left:3%;' >".$row[2]."</td>";
                                echo "<td style='padding-left:4%;'>".$row[3]."</td>";
                                echo "<td style='padding-left:3%;'>".$row[4]."</td>";
                                echo '<td style="padding-left:3%;"><a href = "php/kullanici_sil.php?id='.$row["kullanici_id"].'"onclick="return uyari();"><button type="button" class="btn btn-danger btn-lg">Sil</button></a></td>';
                                echo "</tr>";
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
<script language="JavaScript">
function uyari() {
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>

<script language="JavaScript">
function uyari2() {
 
if (confirm("Bu kaydı güncellemek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>