<?php
include 'header.php';

?>


<!---------------main content  *------------------->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="resimler/18.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resimler/19.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resimler/11.PNG" alt="Third slide">
    </div>
  </div>
</div>

<?php
require_once "db.php";
$urun_kayit=$db->query("SELECT * from urun_kayit",PDO::FETCH_OBJ)->fetchAll();
?>
<!---------------main content  *------------------->
<div class="container">
  <h2 class="ürünü">ÜRÜN LİSTESİ</h2>
  <hr>
  <div class="row">
    <?php foreach ($urun_kayit as $urun) {
      ?>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="nar.png" alt=" nar">
        <div class="caption">
          <h3 style=" text-transform: uppercase;font-size: 17px; font-weight: bold;"><?php echo $urun->urun_ad; ?></h3>
          <p class="text-right price-cantainer"><strong><?php echo $urun->fiyat.' '.'TL'; ?></strong></p>
          <p>
            <button product-id="<?php echo 
            $urun->urun_id;?>" class="btn btn-success btn-block addToCartBtn" role="button">
              <span class="glyphicon glyphicon-shopping-cart"></span>Sepete Ekle
            </button> 
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
  <hr>
</div>


<!------------------main ---------->


<!----------------------------------indirim------------------------->

 <div class="container indirim">
  <h3 class="ürünü"><center>İNDİRİMLİ ÜRÜNLER</center></h3>
    <div class="card card_indirim">
    <div class="row no-gutters">
      
      <div class="col-xs-6 col-md-4 no-padding">
        <img  class="img-fluid resimler" src="resimler/sebze/dere.png">
        <h1 class="resimIndirim">1 Alana 1 Bedava </h1>
      </div>

      <div class="col-xs-6 col-md-4 no-padding">
        <img class="img-fluid resimler" src="resimler/sebze/pataes.jpg">
        <h1 class="resimIndirim">%5 İndirim</h1>
      </div>

      <div class="col-xs-6 col-md-4 no-padding">
        <img class="img-fluid resimler" src="resimler/sebze/turp.png">
        <h1 class="resimIndirim">%10 İndirim</h1>
      </div>

    </div>
    <div class="row no-gutters">
      
      <div class="col-xs-6 col-md-4 no-padding ">
        <img  class="img-fluid resimler" src="resimler/sebze/ayva.png">
        <h1 class="resimIndirim">  Tükendi! </h1>
      </div>

      <div class="col-xs-6 col-md-4 no-padding">
        <img class="img-fluid resimler" src="resimler/sebze/nar.png">
        <h1 class="resimIndirim">%30 İndirim</h1>
      </div>

      <div class="col-xs-6 col-md-4 no-padding">
        <img class="img-fluid resimler" src="resimler/sebze/kabak.png">
        <h1 class="resimIndirim">%50 İndirim</h1>
      </div>
    </div>
  </div> 
</div>




<!--------------------------------foooter------------------------>

<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_menusu">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="footer_menu">
                <h3 class="footer_baslik">Ana Menü</h3>
                <ul class="menu_footer">
                  <li><a class="footer_link" href="#">AnaSayfa</a></li>
                  <li><a class="footer_link" href="#">organicK</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer_menu">
                <div class="footer_menu">
                  <h3 class="footer_baslik">Anahtar Kelimeler</h3>
                  <ul class="menu_footer">
                    <li><a class="footer_link" href="#">OrganikCan</a></li>
                    <li><a class="footer_link" href="#">Organik Tarım</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer_menu">
                <div class="footer_menu">
                  <h3 class="footer_baslik">Bağlantılı Linkler</h3>
                  <ul class="menu_footer">
                    <li><a class="footer_link" href="#">facebook</a></li>
                    <li><a class="footer_link" href="#">instagram</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer_menu">
                <div class="footer_menu">
                  <h3 class="footer_baslik">İletişim</h3>
                  <address>
                    <p> 25.sokak no:7 izmir</p>
                    <p><span class="fa fa-envelope"></span>organik@gmail.com</p>
                  </address>
                  <div class="sosyal_medya">
                    <a class="footer_link sos_logo" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a class="footer_link sos_logo" href="#"><i class="fab fa-google"></i></a>
                    <a class="footer_link ode_logo" href="#"><i class="fab fa-cc-mastercard"></i></i></a>
                    <a  class="footer_link ode_logo" href="#"><i class="fab fa-cc-visa"></i></a>
                    <a class="footer_link ode_logo" href="#"><i class="fab fa-tripadvisor"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!----------------------------------/footer/------------------------------------------>


</body>
</html>