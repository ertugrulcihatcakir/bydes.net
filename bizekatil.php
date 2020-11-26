<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BYDES - BİZİMLE İLETİŞİM KURUN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="iletisim/images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================iletisim/==================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iletisim/css/util.css">
	<link rel="stylesheet" type="text/css" href="iletisim/css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	<?php include('bizekatilheader.php'); ?>
	<br>
	<br>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact00-form validate-form" method="post">
				<span class="contact100-form-title">
					BİZİMLE ÇALIŞMAK İSTER MİSİNİZ?
				</span>
				<label class="label-input100" >Adınız</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="ad" placeholder="  Ör.: Azer">
				</div>
				<label class="label-input100" >Soy Adınız</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" name="soyad" placeholder="  Ör.: Bülbül">
				</div>
				<label class="label-input100" >Email Adresiniz</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="email" name="eposta" placeholder="  Ör.: örnek@gmail.com">
				</div>
				<label class="label-input100">Telefon Numaranız</label>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="text" pattern="\d*" name="telefon" placeholder="  Ör.: +905320000000">
				</div>
				<label class="label-input100" >Kendi Hakkınızda Bilgi</label>
				<div class="wrap-input100 validate-input">
					<textarea class="input100" type="text" name="bilgi" placeholder="  Bilgilerinizi buraya giriniz. "></textarea>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
							Gönder
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
	<?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

  $ad = $_POST['ad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
  $soyad = $_POST['soyad'];
  $eposta = $_POST['eposta'];
  $telefon = $_POST['telefon'];
  $bilgi = $_POST['bilgi'];

  if ($ad<>"" && $soyad<>"" && $eposta<>"" && $telefon<>"" && $bilgi<>"") 
  { // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($baglanti->query("INSERT INTO bilgi (ad,soyad,eposta,telefon,bilgi) VALUES ('$ad','$soyad','$eposta','$telefon','$bilgi')")) // Veri ekleme sorgumuzu yazıyoruz.
    {
    }
  }

}

?>    


<!--===============================================================================================-->
	<script src="iletisim/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/vendor/bootstrap/js/popper.js"></script>
	<script src="iletisim/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/vendor/daterangepicker/moment.min.js"></script>
	<script src="iletisim/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="iletisim/js/main.js"></script>
<!--===============================================================================================-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
