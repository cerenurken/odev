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
                    <a href="siparisler.html">Siparişler</a>
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
                <li>
                    <a href="profil.php">Profil</a>
                </li>
                <li class="active">
                    <a href="#">Gelen Kutusu</a>
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
            <h1>iletişim</h1>-->

            <div class="row">
                
                <div class="col-sm-12 col-md-12">
                    <div class="card-header iletisim-baslik"><center>Tüm Mesajlar</center></div>
                    <div class="card text-left">
                        <table class="table ">
                            <thead class="ilet-tab">
                              <tr>
                                <th class="tablo-adı">AD</th>
                                <th class="tablo-adı">SOYAD</th>
                                <th class="tablo-adı">E-POSTA</th>
                                <th class="tablo-adı">TARİH</th>
                                <th class="tablo-adı">SAAT</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Ayşe</td>
                                <td>Yılmaz</td>
                                <td>ayseeeeee@example.com</td>
                                <td>26.03.2019</td>
                                <td>22:45</td>
                              </tr>
                              <tr>
                                <td>Mahmut</td>
                                <td>Mor</td>
                                <td>maho@example.com</td>
                                <td>26.03.2019</td>
                                <td>22:40</td>
                              </tr>
                              <tr>
                                <td>Alican</td>
                                <td>Dooley</td>
                                <td>alican@example.com</td>
                                <td>26.03.2019</td>
                                <td>22:00</td>
                              </tr>
                              <tr>
                                <td>Fatma</td>
                                <td>Dolan</td>
                                <td>fdfdfd@example.com</td>
                                <td>21.03.2019</td>
                                <td>13:00</td>
                              </tr>
                              <tr>
                                <td>PelinSu</td>
                                <td>Parlar</td>
                                <td>supelin@example.com</td>
                                <td>21.03.2019</td>
                                <td>12:45</td>
                              </tr>
                              <tr>
                                <td>Mahsar Fuat</td>
                                <td>Özkan</td>
                                <td>üclü@example.com</td>
                                <td>02.03</td>
                                <td>23:15</td>
                              </tr>
                              <tr>
                                  <td><i class="fas fa-plus-circle" style="color: green;"></i>...</td>
                                  <td><i class="fas fa-plus-circle" style="color: green;"></i>...</td>
                                  <td><i class="fas fa-plus-circle" style="color: green;"></i>...</td>
                                  <td><i class="fas fa-plus-circle" style="color: green;"></i>...</td>
                                  <td><i class="fas fa-plus-circle" style="color: green;"></i>...</td>
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