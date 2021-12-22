			<?php 
include 'php/header.php';
?>
		
				<?php 
include 'php/ilan.php';

$uyesor=mysqli_query($con, "SELECT * FROM uyeler where uye_kadi='$_SESSION[uye_kadi]'"); 
$uyecek=mysqli_fetch_assoc($uyesor);
?>



<div class="panel panel-default">
<div class="panel-heading"> 
 
  <h3 class="title"><?php echo $kategoriicek['kategori_ad']; ?></h3>
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-10">Hoşgeldiniz <strong><?php echo $_SESSION['uye_kadi']; ?></strong>. Üyelik Bilgileriniz Aşağıdadır.<br>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<br>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"> <a href="#">Profilim</a></li>

</ul>
<br />
<div class="col-lg-6 col-md-12">
       
        <div class="row xx" style="margin-top:5px">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Kullanıcı Adı</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi kirmizi"><?php echo $uyecek['uye_kadi']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Kayıt Tarihi</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_kayittarih']; ?></div>
          </div>
        </div>
        
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Adı</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_ad']; ?></div>
          </div>
        </div>

    <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Soyadı</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_soyad']; ?></div>
          </div>
        </div>
        
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Maili</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_mail']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Telefon</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_telefon']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Cinsiyet</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_cinsiyet']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye İl</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $uyecek['uye_il']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Üye Onay Durumu</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi">

 <?php if ($uyecek['uye_onay']== 1){ ?>
  Onaylı Üye <?php } else{ ?> Üye Onaylanmamış <?php } ?>
</div>
          </div>
        </div>
          </div>

</div>
</div>
</div>
</div>

  <?php 
include 'php/footer.php';
?>