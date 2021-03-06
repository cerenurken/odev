<?php 
require 'php/giris.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/giris.css">

    <title>organicK | Home</title>
  </head>
  <body>
    <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>GİRİŞ</h3>
                    <form  action="php/giris.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Eposta *" value=""  name="giris_mail"  required="required" />
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Parola *" value="" name="giris_pass"  required="required" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Giriş Yap" />
                        </div>
                        <div class="form-group">
                            <a href="#" id="btn-login" class="ForgetPwd">Şifreni Mi Unuttun?</a>
                        </div>
                    </form>


                    <img src="resimler/cinali.png" class="resim">
                </div>

                <div class="col-md-6 login-form-2">
                    <h3>YENİ HESAP</h3>
                    <form action="php/kayit.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="adi" placeholder="Ad / Soyad *" value=""  required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tel" placeholder="Telefon *" value=""   required="required"/>
                        </div>
                        <div class="form-group">
                            <input type="email"  name="mail" class="form-control" placeholder="E-posta *" value=""   required="required" />
                        </div>
                        <div class="form-group">
                              <input type="text" class="form-control" name="adres" placeholder="Adres (Mahalle/Cadde/EvNo) *" value=""  required="required"  />
                        </div>
                        <div class="form-group">
                              <input type="date" class="form-control" name="tarih" placeholder="Doğum Tarihi *" value=""  required="required"  />
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="sifre" class="form-control" placeholder="Parola *" value=""  required="required" />
                        </div>
                        <div class="form-group">
                            <li id="li-gender" class="gender">
                              <span class="dogum">Cinsiyet</span></br>
                                <label for="register-male" class="radio control-inline cinsiyet">
                                  <input type="radio" name="signup_form" required="required" class="gender cinsiyet" data-msg-required="Lütfen cinsiyetinizi belirtiniz." value="Erkek">Erkek</label>
                                <label for="register-female" class="radio control-inline cinsiyet">
                                  <input type="radio"  name="signup_form" required="required" class="gender cinsiyet" data-msg-required="Lütfen cinsiyetinizi belirtiniz." value="Kadın"> Kadın</label>
                                </li>
                        </div>
                        
                        
                        
                        
                        <div class="form-group">
                           <label for="register-thirdparty" class="checkbox sozlesme">
                              <input type="checkbox" id="register-thirdparty" name="sozlesme" class="thirdparty" value="Seçildi"  required="required">
                              Pazarlama amaçları doğrultusunda kayıt verilerimi organicK'in içerik sağlayıcıları ile paylaş. Gizlilik politikamızda açıklandığı şekilde, verilerinin Avrupa Ekonomik Alanı dışındaki ülkelerden birine aktarılabileceğini aklında bulundur.
                            </label>
                        </div>


                        <div class="form-group">
                         <input type="submit" class="btnSubmit" value="KAYDOL" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>