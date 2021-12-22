<?php
error_reporting(0);
include "php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");

$ayarsor=mysqli_query($con, "SELECT * FROM `ayarlar`"); 
$ayarcek=mysqli_fetch_assoc($ayarsor);
?>
<?php
$urunnsor=mysqli_query($con,"select * from urunler where urun_id=$_GET[urun_id]");
$urunncek=mysqli_fetch_assoc($urunnsor)
?>

<html>

<!-- Mirrored from v2.ilanscripti.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 00:32:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta name="rating" content="general"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 Days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta id="Content-Language" http-equiv="Content-Language" content="tr"/>
<title><?php echo $urunncek['urun_ad'] ?></title>
<meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>" />
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>" />
<link rel="canonical" href="index.html"/>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link href="assets/css/menu3d.min.css" rel="stylesheet" media="screen, projection" />
<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script> var touchstart=((document.ontouchstart!==null)?'click':'touchstart'); </script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/scripts/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<style> @media (max-width: 1280px) { .main { margin-top: 15px !important; }} </style><script src="assets/js/jquery.plugin.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.countdown-tr.js"></script>
<script src="assets/js/fileinput.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/js/jquery.countdown.css">
<style type="text/css">
#defaultCountdown {
	width: 240px;
	height: 45px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php" style="margin-left:0px !important; padding:0px !important; padding-top:20px !important"><img src="uploads/logo.png" alt="AL-SAT"></a></div>
	  <li id="searchbar" class="navbar-toggle collapsed">
          <form id="search_form" class="navbar-form navbar-left navbar-input-group " role="search" action="http://v2.ilanscripti.org/arama.html" method="post">
            <div class="input-group">
              <div class="form-group">
                <input name="q" type="text" class="form-control input-lg arama-edit" placeholder="ilan numarası veya kelime" autofocus>
              </div>
              <span class="input-group-btn">
              <button type="submit" class="btn btn-primary arama-buton"> <i class="fa fa-search"></i> &nbsp; </button>
              </span> </div>
          </form>
        </li>
    <div id="navbar" class="navbar-collapse collapse navbar-right toplink">
      <ul class="nav navbar-nav">
        <li id="searchbar" class="visible-lg">
          <form id="search_form" class="navbar-form navbar-left navbar-input-group " role="search" action="http://v2.ilanscripti.org/arama.html" method="post">
            <div class="input-group">
              <div class="form-group">
                <input name="q" type="text" class="form-control input-lg arama-edit" placeholder="ilan numarası veya kelime" autofocus>
              </div>
              <span class="input-group-btn">
              <button type="submit" class="btn btn-primary arama-buton"> <i class="fa fa-search"></i> &nbsp; </button>
              </span> </div>
          </form>
        </li>
                <li ><a href="uyegirisi.html" class="gri"><i class="fa fa-lock fa-lg"></i> Üye Girişi</a></li>
        <li ><a href="uyeol.html" class="gri"><i class="fa fa-user-plus fa-lg"></i> Üye Ol</a></li>
      <li><a href="uyegirisi.html"><i class="fa fa-hand-o-right fa-lg"></i> Ücretsiz İlan Ver</a></li>
      </ul>
    </div>
  </div>
</nav>