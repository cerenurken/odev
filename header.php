<!DOCTYPE html>
<html lang="en">
  <head>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="costum.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="custom.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/odev.css">
    <title>organicK | Home</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION["shoping"])){

  $shoping = $_SESSION["shoping"];

  $total_count = $shoping["summary"]["total_count"];
  $total_price = $shoping["summary"]["total_price"];
  $urun_kayit = $shoping["urun_kayit"];


}else{
  $total_count = 0;
  $total_price = 0.0;
}
?>


<div class="container">
      <div class="row">
        <div class="col-sm-1 col-md-4">
          <img class="logo" src="resimler/logo.png">
        </div>
        <div class="col-sm-1 col-md-4">
          <nav class="navbar navbar-light ">
            <form class="form-inline">
              <input class="form-control mr-sm-2 buton_konum" style="width: 200px;" type="search" placeholder="Sebze,Meyve,..." aria-label="Search">
              <button class="btn btn-outline-success  buton_konum" type="submit">Ara</button>
            </form>
          </nav>
        </div>
      </div>
    </div>





<!-------------------------------HEADER ---------------------->
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 3px;">
  <a class="navbar-brand" href="#">AnaSayfa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Ürünler<span class="sr-only">(current)</span></a>
      </li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="giris.html">
        <span class="glyphicon glyphicon-user cart-icon"></span>
      </a></li>
              
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="shoping.php">
    		<span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
    		<span class="badge cart-count"><?php echo $total_count; ?></span>
    	</a></li>
    </ul>


  </div>
</nav>	

<!-------------------------- / header /------------------>
