			<?php 
include 'php/header.php';
?>
<?php
$urunnsor=mysqli_query($con,"select * from urunler where urun_id=$_GET[urun_id]");
$urunncek=mysqli_fetch_assoc($urunnsor)
?>
<?php
 $kategorisor=mysqli_query($con, "SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid WHERE kategori_id=$_GET[altkat_ustid] "); 
$kategoriicek=mysqli_fetch_assoc($kategorisor);
?>	
<div class="topmenu site-rengi"> </div>

<div class="container">
<ul class="breadcrumb">
	<li><a href="index.php">Anasayfa</a></li>
	
	<li>İlandaki Ürünler</li>
</ul>
</div><div class="container main">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3" >

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="title"><i class="fa fa-list"></i> Kategoriler</h3>
        </div>
        <div class="panel-body">
          <ul class="kategoriler" id="bodyDiv">
<li><a href="#">« Tüm Kategoriler</a></li>
	<li><a href="#" title="<?php echo $kategoriicek['kategori_ad']; ?>"><?php echo $kategoriicek['kategori_ad']; ?></a> ( 0 ) 
		<ul class="kategoriler2">
			<?php
				$kategorisor="SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid WHERE kategori_id=$_GET[altkat_ustid] ORDER BY altkat_id ASC ";
                $sql=mysqli_query($con,$kategorisor);
                while($kategoricek=mysqli_fetch_assoc($sql)){ ?>
			<li><a href="arsa-kategorino-4.html" title="Arsa"><?php echo $kategoricek['altkat_ad']; ?></a> ( 0 )</li>
			<?php } ?>
		</ul></li></ul></li></ul>
        </div>
      </div>
      <script>
function ilceler(){
	var e = $("#sehir").val();
	$.post('systems/kategori/ilce.html',{id:e},function(output){
		$("#ilce option").remove();
		$("#ilce").append(output);
	});
	mahalle();
}

function mahalle(){
	var e = $("#ilce").val();
	$.post('systems/kategori/sm.html',{id:e},function(output){
		$("#sm option").remove();
		$("#sm").append(output);
	});	
}
</script>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title"><i class="fa fa-filter"></i> Aramanızı Daraltın</h3>
  </div>
  <div class="panel-body">
        <form action="http://v2.ilanscripti.org/emlak-kategorino-1.html" method="get" enctype="application/x-www-form-urlencoded">
      <input type="hidden" name="sayfa" value="kategorigoruntule" />
      <label>Fiyat Aralığı</label>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
            <input name="fiyat1" type="text" id="fiyat1" onKeyDown="sayiMi();" value="" onFocus="this.value='';" onBlur="changeFormat(this)" class="form-control"  placeholder="0.00" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
            <input name="fiyat2" type="text" id="fiyat2" value="" onKeyDown="sayiMi();" onBlur="changeFormat(this)" onFocus="this.value='';" class="form-control" placeholder="0.00"/>
          </div>
        </div>
      </div>
      <div class="form-group hidden">
        <label>Durumu</label>
        <select name="durumu" id="durumu" class="form-control">
          <option value="0"  selected="selected">Tümü</option>
          <option value="1" >İkinci El</option>
          <option value="2" >Sıfır</option>
        </select>
      </div>
      <div class="form-group">
        <label>İl</label>
        <select name="sehir" id="sehir" class="form-control" onchange="ilceler()" >
          <option value="0">Tümü</option>
          <option value="81">ADANA</option><option value="80">ADIYAMAN</option><option value="79">AFYONKARAHİSAR</option><option value="78">AĞRI</option><option value="14">AKSARAY</option><option value="77">AMASYA</option><option value="76">ANKARA</option><option value="75">ANTALYA</option><option value="7">ARDAHAN</option><option value="74">ARTVİN</option><option value="73">AYDIN</option><option value="72">BALIKESİR</option><option value="8">BARTIN</option><option value="10">BATMAN</option><option value="13">BAYBURT</option><option value="71">BİLECİK</option><option value="70">BİNGÖL</option><option value="69">BİTLİS</option><option value="68">BOLU</option><option value="67">BURDUR</option><option value="66">BURSA</option><option value="65">ÇANAKKALE</option><option value="64">ÇANKIRI</option><option value="63">ÇORUM</option><option value="62">DENİZLİ</option><option value="61">DİYARBAKIR</option><option value="1">DÜZCE</option><option value="60">EDİRNE</option><option value="59">ELAZIĞ</option><option value="58">ERZİNCAN</option><option value="57">ERZURUM</option><option value="56">ESKİŞEHİR</option><option value="55">GAZİANTEP</option><option value="54">GİRESUN</option><option value="53">GÜMÜŞHANE</option><option value="52">HAKKARİ</option><option value="51">HATAY</option><option value="6">IĞDIR</option><option value="50">ISPARTA</option><option value="83">İSTANBUL (ASYA)</option><option value="48">İSTANBUL (AVR)</option><option value="47">İZMİR</option><option value="36">KAHRAMANMARAŞ</option><option value="4">KARABÜK</option><option value="12">KARAMAN</option><option value="46">KARS</option><option value="45">KASTAMONU</option><option value="44">KAYSERİ</option><option value="3">KİLİS</option><option value="11">KIRIKKALE</option><option value="43">KIRKLARELİ</option><option value="42">KIRŞEHİR</option><option value="41">KOCAELİ</option><option value="40">KONYA</option><option value="39">KÜTAHYA</option><option value="38">MALATYA</option><option value="37">MANİSA</option><option value="35">MARDİN</option><option value="49">MERSİN</option><option value="34">MUĞLA</option><option value="33">MUŞ</option><option value="32">NEVŞEHİR</option><option value="31">NİĞDE</option><option value="30">ORDU</option><option value="2">OSMANİYE</option><option value="29">RİZE</option><option value="28">SAKARYA</option><option value="27">SAMSUN</option><option value="19">ŞANLIURFA</option><option value="84">SEÇİNİZ</option><option value="26">SİİRT</option><option value="25">SİNOP</option><option value="9">ŞIRNAK</option><option value="24">SİVAS</option><option value="23">TEKİRDAĞ</option><option value="22">TOKAT</option><option value="21">TRABZON</option><option value="20">TUNCELİ</option><option value="18">UŞAK</option><option value="17">VAN</option><option value="5">YALOVA</option><option value="16">YOZGAT</option><option value="15">ZONGULDAK</option>        </select>
      </div>
      <div class="form-group">
        <label>İlçe</label>
        <select name="ilce" id="ilce" class="form-control" onChange="mahalle()">
          <option value="0">Tümü</option>        </select>
      </div>
      <div class="form-group">
        <label>Semt Mahale</label>
        <select name="sm" id="sm" class="form-control">
          <option value="0">Tümü</option>        </select>
      </div>
      
            <div class="form-group">
        <label>
          <input name="f3" type="checkbox" value="1"  />
          Fotoğraflı ilanlar</label>
      </div>
       <input type="hidden" name="id" value="1" />
		<input name="arama" type="submit" value="Aramayı Daralt" class="buton buton-yesil-siyah btn-block" />
    </form>
  </div>
</div>
    
      <div class="altbosluk hidden-sm hidden-xs"></div>
      <div class="hidden-sm hidden-xs"><a href=" " target="_blank"><img src="uploads/magaza_11.jpg"></a></div>
      <br class="hidden-sm hidden-xs">
      <div class="panel panel-default visible-md visible-lg">
        <div class="panel-heading">
          <h3 class="title"><i class="fa fa-newspaper-o"></i> Haberler</h3>
        </div>
        <div class="panel-body">
          <ul id="haberler">
            
		<li class="news-item">
		<h3 class="title"><a href="haber-6-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-6-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-5-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-5-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-4-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-4-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-3-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-3-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>          </ul>
        </div>
      </div>
      <div class="hidden-sm hidden-xs"><a href=" " target="_blank"><img src="uploads/magaza_8.jpg"></a></div>
      <br  class="hidden-sm hidden-xs">
     
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12" ">
      
<script>
$(function(){
	$('.ilanlar').on('click', function() {
		var row = $(this).data('id');
		window.location.href = row;
    });
	$('[data-toggle="tooltip"]').tooltip()
});
function MM_jumpMenu(targ,selObj,restore){
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<div class="panel panel-default">
<div class="panel-heading">
  <h3 class="title"><?php echo $kategoriicek['kategori_ad']; ?></h3>
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-10"> <strong>"<?php echo $kategoriicek['kategori_ad']; ?>"</strong> aramanızda <strong>0</strong> ilan bulundu.<br>
  </div>
  <div class="col-md-2">
    <span class="pull-right liste"> <a href="emlak-kategorino-1.html?id=2"><i class="glyphicon glyphicon-th" data-toggle="tooltip" data-placement="left" title="Katalog Görünümü"></i></a> <a href="emlak-kategorino-1.html?id=1" ><i class="glyphicon glyphicon-th-list" data-toggle="tooltip" data-placement="left" title="Liste Görünümü"></i></a> </span>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<br>
<form class="hidden-lg">
  <select class="form-control kucuk-edit" name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
    <option value="emlak-kategorino-14f96.html?git=1&amp;order=1">Gelişmiş Sıralama</option>
    <option value="emlak-kategorino-1bb6e.html?git=1&amp;order=3" >Fiyata göre (Önce en yüksek)</option>
    <option value="emlak-kategorino-1955b.html?git=1&amp;order=4" >Fiyata göre (Önce en düşük)</option>
    <option value="emlak-kategorino-14f96.html?git=1&amp;order=1" >Tarihe göre (Önce en yeni)</option>
    <option value="emlak-kategorino-19613.html?git=1&amp;order=2" >Tarihe göre (Önce en eski)</option>
  </select>
</form>
<form class="visible-lg pull-right" style="padding:0 !important; margin:0 !important">
  <select class="form-control kucuk-edit" name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
    <option value="emlak-kategorino-14f96.html?git=1&amp;order=1">Gelişmiş Sıralama</option>
    <option value="emlak-kategorino-14f96.html?git=1&amp;order=1" >Tarihe göre (Önce en yeni)</option>
    <option value="emlak-kategorino-19613.html?git=1&amp;order=2" >Tarihe göre (Önce en eski)</option>
  </select>
</form>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"> <a href="#">Emlak</a></li>
</ul>
<br />
<div class="table-responsive">
<table class="table-striped table-hover" width="100%">
<thead>
  <tr>
    <th width="110"></th>
    <th width="">İlan Başlığı</th>
    <th width="100" class="center">Fiyat</th>
    <th width="100" class="center">İlan Tarihi</th>
    <th width="125" class="center">İl / İlçe</th>
  </tr>
    </thead>
  <tbody>
    <?php $urunsor="SELECT * FROM altkategori INNER JOIN urunler ON altkategori.altkat_id = urunler.urun_ustid WHERE altkat_id=$_GET[urun_ustid] ";
                              $sql=mysqli_query($con,$urunsor);
                              while($uruncek=mysqli_fetch_assoc($sql)){ ?>
       <tr class="ilanlar" data-id="sahibinden-temiz-mitsubishi-24.html">
                <td style="padding:0px !important"><center>
                    <img src="resim/server/php/files/24/thumbnail/1484616584_satilik-mitsu.jpg" width="100" height="100" class="img-responsive" style="max-height:100px">
                  </center></td>
                <td><?php echo $uruncek['urun_ad']; ?></td>
                <td class="center fiyat"><?php echo $uruncek['urun_fiyat']; ?></td>
                <td class="center"><?php echo $uruncek['urun_ilantarih']; ?></td>
                 <td class="center"><?php echo $uruncek['urun_il']; ?><br><?php echo $uruncek['urun_ilce']; ?></td>
              </tr>
      <?php }?>
        </tbody>
</table>
</div>
<nav>
  <center>
     <script> $(function () {}); </script><nav>
<ul class="pagination">
<li><a href="emlak-kategorino-130eb.html?git=1" aria-label="Previous"><span aria-hidden="true"  data-toggle="tooltip" data-placement="left" title="Önceki">&laquo;</span></a></li><li><a href="emlak-kategorino-17128.html?git=0" aria-label="Next" data-toggle="tooltip" data-placement="right" title="Sonraki"><span aria-hidden="true">&raquo;</span></a></li></ul></nav>  </center>
</nav>
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