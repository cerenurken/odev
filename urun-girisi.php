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
                <li class="active">
                    <a href="#">Ürün Girişi</a>
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
            
          

                <hr >

            <!--
            <h1>urun girişi</h1>--->

            <div class="row">
                
                <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-sm-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active urun-tab" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Ürün Bilgileri</a>
                                <a class="nav-item nav-link urun-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">İndirimli Ürünler</a>
                                <a class="nav-item nav-link urun-tab" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Stok Kontrol</a>
                                <a class="nav-item nav-link urun-tab" id="nav-gider-tab" data-toggle="tab" href="#nav-gider" role="tab" aria-controls="nav-gider" aria-selected="false">Gider Kalemleri</a>
                                <a class="nav-item nav-link urun-tab" id="nav-gelir-tab" data-toggle="tab" href="#nav-gelir" role="tab" aria-controls="nav-gelir" aria-selected="false">Toplam Gelir</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                        <div class="col-sm-12 col-md-8 urun_düzen">
                                            <div class="card text-left">
                                                <form action="php/urun_giris.php" method="GET">
                                                <div class="form-group urun-konum">
                                                    <label for="ad" class="text-uppercase urun-form"><i class="far fa-edit kisisel-icon"></i>Ürün Adı</label>
                                                    <input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ." name="urun_ad">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-align-left kisisel-icon"></i>Kategorİ Seç</label>
                                                    <!--<input type="text" class="form-control form-kisisel" placeholder="Sebze,Meyve, ...">-->
                                                    <select class="form-control urun-kisisel" id="sel1" name="kategori">
                                                        <option value="0">Kategori Seçiniz</option>
                                                        <option value="1">SEBZE</option>
                                                        <option value="2">YEŞİLLİK</option>
                                                        <option value="3">MEYVE</option>
                                                        <option value="4">SALÇA&SİRKE</option>
                                                        <option value="5">KURU BAKLİYAT</option>
                                                      </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-lira-sign kisisel-icon"></i>Fİyatı</label>
                                                    <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="urun_fiyat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="far fa-window-restore kisisel-icon"></i>Stok Mİktarı</label>
                                                    <input type="text" class="form-control urun-kisisel kg" placeholder="KG / ADET . . ." name="urun_mik">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <i class="fas fa-plus-circle"></i>
                                                    <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET"> 
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3 urun_foto">
                                        <div class="card-header haber-baslik"><center>Ürün Fotoğrafı</center></div>
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
                                </div>




                                   
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row ">
                                        <div class="col-sm-12 col-md-8 urun_düzen">
                                            <div class="card text-left ">
                                                <form action="php/indirim.php" method="GET">
                                                
                                                <div class="form-group urun-konum">
                                                    <label for="ad" class="text-uppercase urun-form" ><i class="far fa-edit kisisel-icon"></i>Ürün Adı</label>
                                                    <!--
                                                    <input type="text" class="form-control urun-kisisel" placeholder="Domates , Biber,  . . ."  name="urun_ad"> -->
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




                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="far fa-window-restore kisisel-icon"></i>İndİrİm Stok Mİktarı</label>
                                                    <input type="text" class="form-control urun-kisisel" placeholder="KG / ADET  . . ."name="indirim_mik">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-percent kisisel-icon"></i>İndİrİm Oranı</label>
                                                    <input type="text" class="form-control urun-kisisel" placeholder="% . . ." name="indrm_orani">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-hourglass-half kisisel-icon"></i>İndİrİm başlangıcı</label>
                                                    <input type="date" class="form-control urun-kisisel" placeholder="GÜN  . . ." name="indrm_bas_süre">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-hourglass-half kisisel-icon"></i>İndİrİm Sonu</label>
                                                    <input type="date" class="form-control urun-kisisel" placeholder="GÜN  . . ." name="indrm_süre">
                                                </div>
                                                <div class="form-group">
                                                    <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-lira-sign kisisel-icon"></i>Yenİ Fİyat</label>
                                                    <input type="text" class="form-control urun-kisisel kg" placeholder="TL  . . ." name="guncel_fiyt">
                                                </div>
                                                 <i class="fas fa-plus-circle"></i>
                                                 <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET" />
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3 urun_fotosu">
                                        <div class="card-header haber-baslik"><center>Ürün Fotoğrafı</center></div>
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

                                </div>
                               
                               

                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table table-striped table-dark" cellspacing="0">
                                    <thead >
                                        <tr >
                                            <th class="stok-kontrol">Ürün Adı</th>
                                            <th class="stok-kontrol">Ürün Kategorisi</th>
                                            <th class="stok-kontrol">Toplam Ürün Miktarı</th>
                                            <th class="stok-kontrol">Satılan Ürün Miktarı</th>
                                            <th class="stok-kontrol">Kalan Ürün Miktar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Domates</td>
                                            <td>Sebze</td>
                                            <td>50 KG</td>
                                            <td>30 KG</td>
                                            <td>20 KG</td>
                                        </tr>
                                        <tr>
                                            <td>Portakal</td>
                                            <td>Meyve</td>
                                            <td>45 KG</td>
                                            <td>40 KG</td>
                                            <td>5 KG</td>
                                        </tr>
                                        <tr>
                                            <td>Kuru Fasulye</td>
                                            <td>Kuru Bakliyat</td>
                                            <td>5 KG</td>
                                            <td>2 KG</td>
                                            <td>3 KG</td>
                                        </tr>
                                        <tr>
                                            <td>Mercimek</td>
                                            <td>Kuru Bakliyat</td>
                                            <td>35 KG</td>
                                            <td>25 KG</td>
                                            <td>10 KG</td>
                                        </tr>
                                        <tr>
                                            <td>Salatalık</td>
                                            <td>Sebze</td>
                                            <td>90 KG</td>
                                            <td>40 KG</td>
                                            <td>50 KG</td>
                                        </tr>
                                        <tr>
                                            <td>Mandalina</td>
                                            <td>Meyve</td>
                                            <td>15 KG</td>
                                            <td>2 KG</td>
                                            <td>13 KG</td>
                                        </tr>
                                    </tbody>
                                </table></br>
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="tab-pane fade" id="nav-gider" role="tabpanel" aria-labelledby="nav-gider-tab">
                                <div class="card">
                                  <div class="card-body">
                                    <form action="php/giderler.php" method="GET">
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="far fa-file-alt kisisel-icon"></i>Fatura Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="fatura">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-male kisisel-icon"></i>Çalışan Ödemelerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="odeme">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-car kisisel-icon"></i>Araç Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="arac">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="far fa-building kisisel-icon"></i>Ofİs Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="ofis">
                                        </div>
                                        <div class="form-group">
                                            <label for="soyad" class="text-uppercase urun-form"><i class="fas fa-seedling kisisel-icon"></i>İlaçlama Gİderlerİ</label>
                                            <input type="text" class="form-control urun-kisisel" placeholder="TL  . . ." name="ilac">
                                        </div>
                                        <input type="submit" class="btnSubmit btn-success ürün-giris-buton" value="KAYDET" />
                                    </form>
                                                
                                  </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="nav-gelir" role="tabpanel" aria-labelledby="nav-gelir-tab">
                                <table class="table table-striped table-dark">
                                  <thead>
                                    <tr>
                                      <TH scope="col">Yenilenme Tarihi</TH>
                                      <th scope="col">Toplam Satılan Ürün Miktarı</th>
                                      <th scope="col">Satışlardan Elde Edilen Gelir</th>
                                      <th scope="col">Toplam Giderler</th>
                                      <th scope="col">Kar Miktarı</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>27.03.2019</td>
                                      <td scope="row">100</td>
                                      <td>300 TL</td>
                                      <td>30 TL</td>
                                      <td>270 TL</td>
                                    </tr>
                                    <tr>
                                      <td>27.02.2019</td>
                                      <td scope="row">25</td>
                                      <td>100 TL</td>
                                      <td>12 TL</td>
                                      <td>88TL</td>
                                    </tr>
                                    <tr>
                                      <td>27.01.2019</td>
                                      <td scope="row">650</td>
                                      <td>1270 TL</td>
                                      <td>270 TL</td>
                                      <td>1000 TL</td>
                                    </tr>
                                    <tr>
                                      <td>27.12.2018</td>
                                      <td scope="row">100</td>
                                      <td>300 TL</td>
                                      <td>30 TL</td>
                                      <td>470 TL</td>
                                    </tr>
                                    <tr>
                                      <td>27.11.2018</td>
                                      <td scope="row">25</td>
                                      <td>100 TL</td>
                                      <td>12 TL</td>
                                      <td>808TL</td>
                                    </tr>
                                    <tr>
                                      <td>27.10.2018</td>
                                      <td scope="row">650</td>
                                      <td>1270 TL</td>
                                      <td>270 TL</td>
                                      <td>2300 TL</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <i class="fas fa-plus-circle"></i>
                                </BR>
                                <label class="tablo-acıklama">Toplam Gelir tablosundaki veriler aylık çıktı verir.</label>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







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

    <script type="text/javascript" src="select2.min.js"></script>

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

           
                $('[data-toggle="tooltip"]').tooltip();

                
           

        });
    </script>
</body>

</html>