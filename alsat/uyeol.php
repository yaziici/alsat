			<?php 
include 'php/header.php';
?>
		
<div class="topmenu site-rengi"> </div>

<div class="container">
<ul class="breadcrumb">
	<li><a href="index.php">Anasayfa</a></li>
	<li><a href="#">Üye Ol</a></li>
</ul>
</div>
<div class="container main">
  <script>
</script>
<style></style>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title"><i class="fa fa-user-plus fa-lg"></i> Üye Ol</h3>
  </div>
  <div class="panel-body">Üyelik formuna doğru bilgiler kaydedilmelidir. Bu bilgilerin doğruluğu ile; Çağrı merkezi hizmetlerimizden faydalanmak istediğinizde bu bilgiler ile teyit edileceksiniz.
    <div class="row"><br>

      <form name="uyekaydet" action="alsatadmin/islem.php" method="POST">
        <div class="col-md-6">
          <div class="form-group">
            <label>Adınız</label>
            <input class="form-control" type="text" name="uye_ad" value="" placeholder="Adınız">
          </div>
          <div class="form-group">
            <label>E-Posta</label>
            <input class="form-control" type="email" name="uye_mail" value="" placeholder="E-Posta">
          </div>
          <div class="form-group">
            <label>Parola</label>
            <input class="form-control" type="password" name="uye_sifre" value="" placeholder="Parola">
          </div>
            <div class="form-group">
            <label>Gsm</label>
            <input class="form-control" type="phone" name="uye_telefon" value="" placeholder="10 Hane Olarak Yazın (5324446677)">
          </div>
          
          
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Soyadınız</label>
            <input class="form-control" type="text" name="uye_soyad" value="" placeholder="Soyadınız">
          </div>
          <div class="form-group">
            <label>Kullanıcı Adınız</label>
            <input class="form-control" type="text" name="uye_kadi" value="" placeholder="Kullanıcı Adınız">
          </div>
          <div class="form-group">
            <label>Cinsiyet</label>
            <select name="uye_cinsiyet" id="uye_cinsiyet" class="form-control">
              <option value="">Seçiniz</option>
              <option value="Bay">Bay</option>
              <option value="Bayan">Bayan</option>
            </select>
          </div>
          <label>İl Seçiniz</label>
                <div class="form-group">
                  <select name="uye_il" id="uye_il" class="form-control">
                    <option value="">İl Seçiniz</option>
    <option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Amasya">Amasya</option>
<option value="Ankara">Ankara</option>
<option value="Antalya">Antalya</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Isparta">Isparta</option>
<option value="Mersin">Mersin</option>
<option value="İstanbul">İstanbul</option>
<option value="İzmir">İzmir</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Mardin">Mardin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
<option value="Aksaray">Aksaray</option>
<option value="Bayburt">Bayburt</option>
<option value="Karaman">Karaman</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Batman">Batman</option>
<option value="Şırnak">Şırnak</option>
<option value="Bartın">Bartın</option>
<option value="Ardahan">Ardahan</option>
<option value="Iğdır">Iğdır</option>
<option value="Yalova">Yalova</option>
<option value="Karabük">Karabük</option>
<option value="Kilis">Kilis</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Düzce">Düzce</option> </select>
                </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Üyelik Sözleşmesi</label>
            <p><textarea cols="45" rows="5" class="form-control" readonly><?php echo $ayarcek['uye_sozlesme']; ?></textarea></p>
          </div>
          
          
          <div class="form-group">
            <input type="checkbox" value="1" required="required">
            <u><strong>Üyelik Sözleşmesini</strong></u> Okudum Onaylıyorum. </div>
          <div class="form-group">
            <input class="btn btn-success" style="width: 100%" type="submit" name="uyekaydet" value="Üye Ol">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

	<?php 
include 'php/footer.php';
?>