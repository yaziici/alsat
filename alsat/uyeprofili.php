<?php include 'php/header.php'; ?>

<?php
$uyesor=mysqli_query($con,"select * from uyeler where uye_id=$_GET[uye_id]");
$uyecek=mysqli_fetch_assoc($uyesor)
?>

<div class="topmenu site-rengi"> </div>

<div class="container">
<ul class="breadcrumb">
	<li><a href="index-2.html">Anasayfa</a></li>
	<li><a href="#">Üye Profili</a></li>
</ul>
</div>
<div class="container main">
  <style>
.brd div {
	line-height: 24px;
}
</style>
<div class="panel panel-default">
  <div class="panel-body"><br />
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <div class="bilgi">
          <div class="bilgi2" style="min-height:255px">
            <h3 class="title">Saticinin Profili</h3>
            <br />
            Satıcı ger&ccedil;ekleştirdiği <strong>0 adet</strong> işlem i&ccedil;erisinde; 0 adet olumlu 0 adet olumsuz 0 adet kararsız yorum almıştır <br />
            <br />
            <div class="row">
              <div class="col-md-4 brd">
                <div><img src="assets/img/yorum_1.gif" width="24" height="24" /> Aldigi Toplam Olumlu Yorum</div>
              </div>
              <div class="col-md-8 brd">
                <div>0</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 brd">
                <div><img src="assets/img/yorum_2.gif" width="24" height="24" /> Aldigi Toplam Olumsuz Yorum</div>
              </div>
              <div class="col-md-8 brd">
                <div>0</div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 brd">
                <div><img src="assets/img/yorum_3.gif" width="24" height="24" /> Aldigi Toplam Kararsiz Yorum</div>
              </div>
              <div class="col-md-8 brd">
                <div>0</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <div class="bilgi">
          <div class="bilgi2">
                        <h3 class="title" style="margin-bottom:5px"><?php echo $uyecek['uye_ad']; ?></h3>
            <div class="utarih">&Uuml;yelik Tarihi: <?php echo $uyecek['uye_kayittarih']; ?></div>
            <div class="ulink"><a href="index7dcd.html?sayfa=profil&amp;id=88" class="btn btn-primary btn-xs btn-block"><i class="glyphicon glyphicon-chevron-right"></i> Kullanıcının Profili</a></div>
            <div class="ulink"><a href="88-kullanicinin-diger-ilanlari.html" class="btn btn-primary btn-xs btn-block"><i class="glyphicon glyphicon-chevron-right"></i> Kullanıcının İlanları</a></div>
            <br />
           <div class="telefon">
              <label><i class="glyphicon glyphicon-phone"></i> </label>
              <?php echo $uyecek['uye_telefon']; ?></div>
                                    <div class="telefon">
              <label><i class="glyphicon glyphicon-home"></i> </label>
              <?php echo $uyecek['uye_mail']; ?> </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="bilgi">
      <div class="bilgi2">
        <h3 class="title">Olumlu Yorumlar</h3>
        <br />
        Kullanıcı hen&uuml;z yorum almadı      </div>
    </div>
      <br />
    <div class="bilgi">
      <div class="bilgi2">
        <h3 class="title">Olumsuz Yorumlar</h3>
        <br />
        Kullanıcı henüz yorum almadı      </div>
    </div>
     <br />
    <div class="bilgi">
      <div class="bilgi2">
        <h3 class="title">Kararsız Yorumlar</h3>
        <br />
        Kullanıcı henüz yorum almadı      </div>
    </div>
  </div>
</div>
</div>
</div>


<?php include 'php/footer.php'; ?>