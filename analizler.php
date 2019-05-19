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
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script>
$(document).ready(function(){
showGraph();
});
function showGraph(){


$.post("php/gider_analiz.php",
function(data){
console.log(data);
var odeme_tarihi=[];
var toplam=[];
for (var i in data){
odeme_tarihi.push(data[i].odeme_tarihi);
toplam.push(data[i].toplam);
};
var chartdata={
labels:odeme_tarihi,
datasets:[
{
label:'Aylık Toplam Gider',
backgroundColor:"#db3f3f",
data:toplam

}]
};
var cnv=$("#myChart");
var barGraph=new Chart(cnv,{
type:'bar',
data:chartdata
});
});


$.post("php/cinsiyet_analiz.php",
function(data){
console.log(data);
var cinsiyet=[];
var sayi=[];
for (var i in data){
cinsiyet.push(data[i].cinsiyet);
sayi.push(data[i].sayi);
};
var chartdata={
labels:cinsiyet,
datasets:[
{

    backgroundColor: '#49e2ff',
    borderColor: '#0e0e0e',
    hoverBackgroundColor: '#98969b',
    hoverBorderColor: '#49e2ff',
    data: sayi


}

]


};
var cnv=$("#Chart");
var barGraph=new Chart(cnv,{
type:'pie',
data:chartdata
});
});



};
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
                    <div class="card text-left">
                        <div class="card-header">AYLIK TOPLAM GİDERLER</div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>

                <div class="col col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">CİNSİYETE GÖRE DAĞILIM</div>
                        <div class="card-body">
                            <canvas id="Chart"></canvas>
                        </div>
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

            </div>
        </div>
    </div>

        

    <!-- jQuery CDN - Slim version (=without AJAX) -->

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

