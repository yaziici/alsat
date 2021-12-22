<?php include 'php/header.php'; 
include 'php/baglan.php';
session_start();
ob_start();

 ?>
<div class="container">
<ul class="breadcrumb">
	<li><a href="index-2.html">Anasayfa</a></li>
	<li><a href="#">Üye Girişi</a></li>
</ul>
</div>
<div class="container main">
  <div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <form action="alsatadmin/islem.php" method="POST" style="margin-top:20px">
        <div class="col-md-6">
          <div class="col-md-12">
            <div class="row">
              <h3 class="title"><i class="fa fa-check fa-lg"></i> Üyelik Avantajları</h3>
            </div>
            <br />
            <div class="row">
              <div class="media">
                <div class="media-left media-middle"><img class="media-object" src="assets/img/add.png"></div>
                <div class="media-body">
                  <h4 class="media-heading"><i class="fa fa-check"></i> Ücretsiz* İlan Verin</h4>
                  Sitemize üye olduktan sonra limitsiz olarak tüm kategorilerde ücretsiz* ilan verebilirsiniz.</div>
              </div>
              <div class="media">
                <div class="media-left media-middle"><img class="media-object" src="assets/img/message.png"></div>
                <div class="media-body">
                  <h4 class="media-heading"><i class="fa fa-check"></i> Diğer Üyelerle Mesajlaşın</h4>
                 Tüm üyelerle, ilan detay ve üye profil sayfalarındaki 'Mesaj Gönder' butonuyla mesajlaşabilirsiniz . </div>
              </div>
              <div class="media">
                <div class="media-left media-middle"><img class="media-object" src="assets/img/statics.png"></div>
                <div class="media-body">
                  <h4 class="media-heading"><i class="fa fa-check"></i> İlanları Sosyal Ağlarda Paylaşın</h4>
                 İlan detay sayfalarındaki bilgileri bir arkadaşınızla ya da sosyal ağlarla paylaşabilirsiniz .</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <?php if (@$_GET['giris']=="no") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARISIZ!</strong> Giriş Yapılamadı.
                            </div>
                          <?php } ?>


          <h3 class="title"><i class="fa fa-lock fa-lg"></i> Üye Girişi</h3>
          <div class="form-group" style="margin-top:10px">
            <label>Kullanıcı Adınız</label>
            <input type="text" name="uye_kadi" id="uye_kadi" value="" placeholder="Kullanıcı Adınız" class="form-control"  tabindex="1" required />
          </div>
          <div class="form-group">
            <label>Şifreniz</label>
            <input type="password" name="uye_sifre" id="uye_sifre" value="" placeholder="Parola" class="form-control"  tabindex="6" required />
          </div>
          <div class="form-group">
            <button type="submit" name="logon" class="btn btn-primary btn-block enter-btn">Giriş Yap</button>

            <div style="margin-top: 5%;"><a href="uyeol.php" data-toggle="tooltip" data-placement="bottom" title="Yeni Üyelik" class="butonimage buton-siyah-yesil"><i class="fa fa-user-plus fa-lg"></i></a></div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</div>
</div>

<?php include 'php/footer.php'; ?>