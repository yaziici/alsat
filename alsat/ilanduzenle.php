			<?php 
include 'php/header.php';
$urun_id=$_GET['urun_id'];
$urunsor=mysqli_query($con,"SELECT * FROM urunler WHERE urun_id='$urun_id'");
$uruncek=mysqli_fetch_assoc($urunsor);
?>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
		
<div class="topmenu site-rengi"> </div>

<div class="container">
<ul class="breadcrumb">
	<li><a href="index.php">Anasayfa</a></li>
  <li><a href="ilanlarim.php">İlanlarım</a></li>
	<li><a href="#">İlan Düzenle</a></li> 
  <li><a href="#">"<?php echo $uruncek['urun_ad']; ?>"</a></li> 
</ul>
</div>
<div class="container main">
  <script>
</script>
<style></style>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title"><i class="fa fa-user-plus fa-lg"></i> "<?php echo $uruncek['urun_ad']; ?>" adlı ilanı düzenle</h3>
  </div>
  <div class="panel-body">Ürünler ile ilgili doğru bilgiler kaydedilmelidir. Bu bilgilerin doğruluğu ile; Çağrı merkezi hizmetlerimizden faydalanmak istediğinizde bu bilgiler ile teyit edileceksiniz.
    <div class="row"><br>

      <form name="urunduzenle" action="alsatadmin/islem.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <div class="form-group">
            <label>Ürün Adı</label>
            <input class="form-control" type="text" name="urun_ad" value="<?php echo $uruncek['urun_ad']; ?>" placeholder="Ürün Adı">
          </div>
          <div class="form-group">
            <label>Üretim Yılı</label>
            <input class="form-control" type="number" name="urun_model" value="<?php echo $uruncek['urun_model']; ?>" placeholder="Ürün Modeli">
          </div>
          <div class="form-group">
            <label>Ürün Fiyatı</label>
            <input class="form-control" type="text" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat']; ?>" placeholder="Ürün Fiyatı">
          </div>
          <div class="form-group">
            <label>Ürün Renk</label>
            <select name="urun_renk" id="urun_renk" class="form-control">
              <option value="<?php echo $uruncek['urun_renk']; ?>"><?php echo $uruncek['urun_renk']; ?></option>
              <option value="">Seçiniz</option>
              <option value="Beyaz">Beyaz</option>
              <option value="Mavi">Mavi</option>
              <option value="Kırmızı">Kırmızı</option>
              <option value="Bordo">Bordo</option>
              <option value="Gri">Gri</option>
              <option value="Haki">Haki</option>
              <option value="Kahverengi">Kahverengi</option>
            </select>
          </div>
          <div class="form-group">
            <label>Ürün Durumu</label>
            <select name="urun_durum" id="urun_durum" class="form-control">
              <option value="<?php echo $uruncek['urun_durum']; ?>"><?php echo $uruncek['urun_durum']; ?></option>
              <option value="">Seçiniz</option>
              <option value="Sıfır">Sıfır</option>
              <option value="İkinci El">İkinci El</option>
            </select>
          </div>
          
          
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Üst Kategori</label>
            <select name="urun_ustid" id="urun_ustid" class="form-control">
              <option value="<?php echo $uruncek['urun_ustid']; ?>"><?php echo $uruncek['urun_ustid']; ?></option>
              <option value="">Seçiniz</option>

              <?php $katsor="SELECT * FROM altkategori ";
                              $sql=mysqli_query($con,$katsor);
                              while($katcek=mysqli_fetch_assoc($sql)){ ?>
              <option value="<?php echo $katcek['altkat_id']; ?>"><?php echo $katcek['altkat_ad']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Garanti Durumu</label>
            <select name="urun_garanti" id="urun_garanti" class="form-control">
              <option value="<?php echo $uruncek['urun_garanti']; ?>"><?php echo $uruncek['urun_garanti']; ?></option>
              <option value="">Seçiniz</option>
              <option value="Garanti Var">Garanti Var</option>
              <option value="Garanti Yok">Garanti Yok</option>
            </select>
          </div>
          <div class="form-group">
            <label>Ürün Kimden</label>
            <select name="urun_kimden" id="urun_kimden" class="form-control">
              <option value="<?php echo $uruncek['urun_kimden']; ?>"><?php echo $uruncek['urun_kimden']; ?></option>
              <option value="">Seçiniz</option>
              <option value="Sahibinden">Sahibinden</option>
              <option value="Galeriden">Galeriden</option>
            </select>
          </div>
          <label>İl Seçiniz</label>
                <div class="form-group">
                  <select name="urun_il" id="urun_il" class="form-control">
                    <option value="<?php echo $uruncek['urun_il']; ?>"><?php echo $uruncek['urun_il']; ?></option>
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
                <div class="form-group">
            <input readonly class="form-control" type="hidden" name="urun_kulid" value="<?php echo $uyecek['uye_id']; ?>" placeholder="">
          </div>
        </div>

          

        <div class="col-md-12">

          <div class="form-group">
           <label>Ürün Açıklama</label>
             <textarea name="urun_aciklama" class="ckeditor"><?php echo $uruncek['urun_aciklama']; ?></textarea>
           </div>  <hr><br>
          <div class="form-group">
            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
            <input class="btn btn-success" style="width: 100%" type="submit" name="urunduzenle" value="İlan Düzenle">
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