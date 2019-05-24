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
    backgroundColor: '#a41a11',
    borderColor: '#0e0e0e',
    hoverBackgroundColor: '#a5a5a5',
    hoverBorderColor: '##a41a11',
    data:toplam

}]
};
var cnv=$("#gider_chart");
var barGraph=new Chart(cnv,{
type:'bar',
data:chartdata
});
});






$.post("php/cinsiyet_analiz.php",
function(data){
console.log(data);
var kadin=[];
var erkek=[];
for (var i in data){
kadin.push(data[i].kadin);
erkek.push(data[i].erkek);
};
var chartdata={
labels:["cinsiyet"],

datasets:[

{
    label:'Kadın %',
    backgroundColor: '#f727cd',
    borderColor: '#0e0e0e',
    data:kadin

},

{
    label:'Erkek %',
    backgroundColor: '#27b0f7',
    borderColor: '#0e0e0e',
    data:erkek

}


]
};
var cnv=$("#cinsiyet_chart");
var barGraph=new Chart(cnv,{
type:'bar',
data:chartdata
});
});






$.post("php/kategori_analiz.php",
function(data){
console.log(data);
var ad=[];
var getiri=[];
var toplam=[];
for (var i in data){
ad.push(data[i].ad);
getiri.push(data[i].getiri);
toplam.push(data[i].toplam);
};
var chartdata={
labels:ad,
datasets:[
{
    label:"Gelir",
    backgroundColor: '#0e9c7e',
    borderColor: 'black',
    hoverBackgroundColor: '#a0a0a0',
    hoverBorderColor: 'black',
    data: getiri


},
{
    label:"Üretim Miktarı",
    backgroundColor: '#f16381',
    borderColor: 'black',
    hoverBackgroundColor: '#5f5f5f',
    hoverBorderColor: 'black',
    data: toplam


}

]


};
var cnv=$("#kategori_chart");
var barGraph=new Chart(cnv,{
type:'bar',
data:chartdata
});
});






$.post("php/eski_analiz.php",
function(data){
console.log(data);
var ad=[];
var eski=[];
var yeni=[];
for (var i in data){
ad.push(data[i].ad);
eski.push(data[i].eski);
yeni.push(data[i].yeni);
};
var chartdata={
labels:ad,
datasets:[
{
    label:"Eski Fiyat",
    backgroundColor: 'transparent',
    borderColor: '#08da40',
    hoverBackgroundColor: '#75f921',
    hoverBorderColor: '#0d0d0d',
    data: eski


},
    {
    label:"Yeni Fiyat",
    backgroundColor: 'transparent',
    borderColor: '#6800bb',
    hoverBackgroundColor: '#6800bb',
    hoverBorderColor: '#0d0d0d',
    data: yeni


}

]


};
var cnv=$("#eski_chart");
var barGraph=new Chart(cnv,{
type:'line',
data:chartdata
});
});




$.post("php/miktar_analizi.php",
function(data){
console.log(data);
var ad=[];
var miktar=[];
var siparis=[];
for (var i in data){
ad.push(data[i].ad);
miktar.push(data[i].miktar);
siparis.push(data[i].siparis);
};
var chartdata={
labels:ad,
datasets:[
{
    label:"Stok Miktar",
    backgroundColor: 'transparent',
    borderColor: '#0ac9bf',
    hoverBackgroundColor: '#b1b3b1',
    hoverBorderColor: 'black',
    data: miktar


},
{
    label:"Sipariş Miktar",
    backgroundColor: 'transparent',
    borderColor: '#8d0707',
    hoverBackgroundColor: '#b1b3b1',
    hoverBorderColor: '#a829a9',
    data: siparis


}

]


};
var cnv=$("#miktar_chart");
var barGraph=new Chart(cnv,{
type:'line',
data:chartdata
});
});




$.post("php/gelir_analiz.php",
function(data){
console.log(data);
var ad=[];
var fiyat=[];
for (var i in data){
ad.push(data[i].ad);
fiyat.push(data[i].fiyat);
};
var chartdata={
labels:ad,
datasets:[
{
    label:"Toplam Gelir",
    backgroundColor: '#f1620a',
    borderColor: 'black',
    hoverBackgroundColor: '#ef4a39',
    hoverBorderColor: 'black',
    data: fiyat


}

]


};
var cnv=$("#gelir_chart");
var barGraph=new Chart(cnv,{
type:'bar',
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
                        <div class="card-header">ESKİ ve GÜNCEL FİYATLAR</div>
                        <div class="card-body" style="background-color:#ded9d9">
                            <canvas id="eski_chart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">STOK MİKTARI ile SİPARİŞ MİKTARI</div>
                        <div class="card-body" style="background-color:#ded9d9">
                            <canvas id="miktar_chart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">SATILAN ÜRÜN GELİRLERİ</div>
                        <div class="card-body" style="background-color:#ded9d9">
                            <canvas id="gelir_chart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">AYLIK TOPLAM GİDERLER</div>
                        <canvas id="gider_chart" style="background-color:#ded9d9"></canvas>
                    </div>
                </div>

                <div class="col col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">CİNSİYETE GÖRE DAĞILIM</div>
                        <div class="card-body" style="background-color:#ded9d9">
                            <canvas id="cinsiyet_chart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="card text-left">
                        <div class="card-header">KATEGORİSİNE GÖRE ÜRÜN MİKTARI ve ELDE EDİLEN GELİR</div>
                        <div class="card-body" style="background-color:#ded9d9">
                            <canvas id="kategori_chart"></canvas>
                        </div>
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

