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
                <li class="active">
                    <a href="#">Ürün Güncelleme</a>
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
            
          
                <hr >

            <!--
            <h1>urun girişi</h1>--->

            <div class="row">

                <div class="col col-sm-12 col-md-6 " >
                    <div class="card text-left">
                        <?php
                            require 'php/baglan.php';
                            $sorgu=mysqli_query($baglan,"SELECT urun_kayit.urun_ad,urun_kayit.fiyat,urun_kayit.stok_miktari from urun_kayit ");
                            echo "<table class='table'>";
                            echo "<thead class='thead-dark'>";
                            echo "<tr>";
                            echo "<th scope='col' >ÜRÜN ADI</th>";
                            echo "<th scope='col'>SİPARİŞ KİLOSU</th>";
                            echo "<th scope='col'>TOPLAM FİYAT</th>";
                            echo "<th scope='col'>SİL</th>";
                            echo "<th scope='col'>GÜNCELLE</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            echo "<tr>";
                            while ($row = mysqli_fetch_array($sorgu)){
                                echo "<td style='text-transform: uppercase;'>".$row[0]."</td>";
                                echo "<td style='padding-left : 10%;'>".$row[1]."</td>";
                                echo "<td style='padding-left : 10%;'>".$row[2]."</td>";
                                echo "<td><button type='button' class='btn btn-danger'>Sil</button></td>";
                                echo "<td><button type='button' class='btn btn-success btn-lg' data-toggle='modal' data-target='#myModal'>Güncelle</button></td>";
                                echo "</tr>";
                                                ?>

                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h5 class="modal-title">Ürün Güncelleme</h5>         
                                            </div>
                                            <div class="modal-body">
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>                      
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Kaydet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
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