<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html lang="tr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="iletisim/images/icons/1.png"/>

  <title>BYDES - YENİLİK İÇİN GELDİ</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/bydes.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include('header.php'); ?>

  <!-- Başlık -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">BYDES</h1>
        <h2 class="text-white-50 mx-auto mt-3 mb-4">Kendi dünyanı yaratmak istiyorsan tam yerindesin. Yaratıcı fikirlerinle BİZİMLE ÇALIŞMAK İSTER MİSİN ? O zaman durma..</h2>
        <a href="bizekatil.php" class="btn btn-primary js-scroll-trigger">Bize Katıl.</a>
      </div>
    </div>
  </header>
  <!-- Hakkımızda Alanı -->
  <section id="hakkinda" class="hakkinda-section text-center">
    <h4 class="text-white-50">HAKKIMIZDA</h4>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <br>
          <br>
          <p class="text-white-50">Yepyeni İyiliklere İmza Atmaya Geldik.<br>
          Bize Ulaşmak İçin İletişim Kısmına Bakabilirsiniz. </p>
        </div>
      </div>
    </div>
  </section>
    
  <!-- Projeler Alanı -->
  <section class="projects-section bg-light"><center id="projeler"><h3>PROJELERİMİZ</h3></center>
    <div class="container">
      <!-- Örnek Projeler Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/3.png" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Ertuğrul Cihat Çakır</h4>
            <p class="text-black-50 mb-0">Ertuğrul Cihat Çakır adına yapılmış blogdur. Kendi öz geçmişini paylaşmıştır. Tek sayfadan oluşan bir blogdur.</p>
            <br>
            <a href="ecc.php" class="btn btn-primary js-scroll-trigger">Daha Fazla Bilgi..</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- İletişim Alanı -->
  <section id="iletisim" class="iletisim-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Yeniliklerden Haberdar Olmak İstiyorsan Abone OL!</h2>

          <form class="form-inline d-flex" method="post">
          <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" type="email" name="abone" placeholder=" Ör.: ornek@gmail.com">
            <button class="btn btn-primary mx-auto">Abone Ol</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php 

      if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
        $abone = $_POST['abone']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
        if ($abone<>"" ) 
        { // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
          if ($baglanti->query("INSERT INTO abone (abone) VALUES ('$abone')")) // Veri ekleme sorgumuzu yazıyoruz.
          {
          }
        }
      }
  ?>   

  <!-- Bilgiler Alanı -->
  <section class="contact-section bg-black">
    <div class="container">
      <div class="row">
       <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Adres</h4>
            <hr class="my-4">
            <div class="small text-black-100">Güzelyalı Mahhalesi Ahmet Hamdi Tanpınar Caddesi İstanbul/Pendik</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-envelope text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Email</h4>
            <hr class="my-4">
            <div class="small text-black-100">
              <a href="mailto:info@bydes.net">info@bydes.net</a>
            </div>
            <div class="small text-black-100">
              <a href="mailto:infobydes@gmail.com">infobydes@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-mobile-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Telefon</h4>
            <hr class="my-4">
            <div class="small text-black-100">YAKINDA</div>
          </div>
        </div>
      </div>
    </div>

   <?php include('footer.php'); ?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/bydes.min.js"></script>

</body>

</html>

