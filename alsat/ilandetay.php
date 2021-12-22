			<?php 
include 'php/header.php';
?>

<?php
$urunnsor=mysqli_query($con,"select * from urunler where urun_id=$_GET[urun_id]");
$urunncek=mysqli_fetch_assoc($urunnsor)
?>
<?php
$katsor=mysqli_query($con,"SELECT * FROM altkategori INNER JOIN urunler ON altkategori.altkat_id = urunler.urun_ustid where urun_id=$_GET[urun_id]");
$katcek=mysqli_fetch_assoc($katsor);
?>

<div class="container main">
<style>
.glyphicon-refresh-animate {
 -animation: spin .7s infinite linear;
 -webkit-animation: spin2 .7s infinite linear;
}
 @-webkit-keyframes spin2 {
 from {
-webkit-transform: rotate(0deg);
}
to {
	-webkit-transform: rotate(360deg);
}
}
 @keyframes spin {
 from {
transform: scale(1) rotate(0deg);
}
to {
	transform: scale(1) rotate(360deg);
}
}
.bosluksil {
	margin: 0px;
	padding: 0px;
}
</style>

<script type="text/javascript">
function fbs_click(width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    u=location.href;
    t=document.title;
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    return false;
}
</script>


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<link href="../developers.google.com/maps/documentation/javascript/examples/defaultbf88.css" rel="stylesheet" type="text/css" />
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row title">
      <div class="col-lg-8">
        <div class="row"><i class="fa fa-arrow-right"></i>
          <img src="uploads/bayraklar/tr.png"> <?php echo $urunncek['urun_ad']; ?></div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="pull-right">
                      </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <div class="row">


      <div class="col-lg-5 col-md-12">
        <div class="mres"><img src="alsatadmin/<?php echo $urunncek['urun_foto']; ?>" border="0" id="mres" style="width:100%;height:100% !important; cursor:pointer" /></div>
        <div class="thumbs">

          <div class="mega"><a href="javascript:void()" data-toggle="modal" data-target="#megafoto"><i class="glyphicon glyphicon-zoom-in"></i> Fotoğrafı Büyüt (Mega Foto)</a></div>

          <div class="col-lg-3 col-md-2 col-sm-2 col-xs-3 padpad">
        <a href="javascript:degistir(<?php echo $urunncek['urun_id']; ?>)" class="thumbnail res" id="rt0"><img src="alsatadmin/<?php echo $urunncek['urun_foto']; ?>" id="img_<?php echo $urunncek['urun_id']; ?>" ></a>
    </div>
          
         <?php $urunfotosor="select * from urunfoto where urun_id=$_GET[urun_id] order by urunfoto_id";
                     					$sql=mysqli_query($con,$urunfotosor);
                     					while($urunfotocek=mysqli_fetch_assoc($sql)){ ?>
          
		<div class="col-lg-3 col-md-2 col-sm-2 col-xs-3 padpad">
        <a href="javascript:degistir(<?php echo $urunfotocek['urunfoto_id']; ?>)" class="thumbnail res" id="rt0"><img src="alsatadmin/<?php echo $urunfotocek['urunfoto_resimurl']; ?>" id="img_<?php echo $urunfotocek['urunfoto_id']; ?>" ></a>
		</div>
	<?php } ?>

		          <br style="clear:both">
        </div>
      </div>


       <script>
		  $( "#mres" ).click(function() {
		  document.getElementById('mres').src = "assets/images/loading.gif";
		  var sayac = $("#sayac").val();
		  var sinir = 1;
		  var acilacak = parseInt(sayac) + 1;  
		  $("#sayac").val(acilacak);   
		  
		  var ac = $("#rt"+acilacak).attr("href");
		  var ac = ac.replace('javascript:degistir(', "");
		  var ac = ac.replace(')', "");
		    var sayac = $("#sayac").val();
			if (sayac == sinir){
			$("#sayac").val(-1); 	
			}
		  degistir(ac);
		  });
		  </script>
		<input type="hidden" id="sayac" name="sayac" value="0" style="width:500px; background-color:red" />
        
      <div class="col-lg-4 col-md-12">
        <div class="row xx">
          <div class="col-lg-12">
            <div class="fiyat2"><?php echo $urunncek['urun_fiyat']; ?> TL</div>
            <div class="ililce altcizgi"><img src="uploads/bayraklar/tr.png"> &nbsp;<?php echo $urunncek['urun_il']; ?>  <?php echo $urunncek['urun_ilce']; ?> </div>
          </div>
        </div>
        <div class="row xx" style="margin-top:5px">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">İlan No</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi kirmizi"><?php echo $urunncek['urun_id']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">İlan Tarihi</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $urunncek['urun_ilantarih']; ?></div>
          </div>
        </div>
        
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Kategori</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $katcek['altkat_ad']; ?></div>
          </div>
        </div>

		<div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Model Yılı</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $urunncek['urun_model']; ?></div>
          </div>
        </div>
        
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Kimden</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $urunncek['urun_kimden']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">İlan Durumu</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $urunncek['urun_durum']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Renk</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi"><?php echo $urunncek['urun_renk']; ?></div>
          </div>
        </div>
        <div class="row xx">
          <div class="col-lg-6 kalin ">
            <div class="altcizgi">Garanti Durumu</div>
          </div>
          <div class="col-lg-6">
            <div class="altcizgi">

 <?php if ($urunncek['urun_garanti']== 1){ ?>
	Garantisi Var <?php } else{ ?> Garantisi Yok <?php } ?>
</div>
          </div>
        </div>
		      </div>
      <div class="col-lg-3 col-md-12">

        <?php
        $uyesorr=mysqli_query($con, "SELECT * FROM uyeler INNER JOIN urunler ON uyeler.uye_id = urunler.urun_kulid WHERE uye_id=$_GET[urun_kulid] "); 
        $uyecekk=mysqli_fetch_assoc($uyesorr);
?>

        <div class="bilgi">
          <div class="bilgi2">
                        <h3 class="title" style="margin-bottom:5px"><i class="fa fa-user"></i> İlan Sahibi: <?php echo $uyecekk['uye_ad']; ?></h3>
            <div class="utarih"><i class="fa fa-calendar"></i> Üyelik Tarihi: <?php echo $uyecekk['uye_kayittarih']; ?></div>
                                    <div class="ulink"><a href="uyeprofili.php?uye_id=<?php echo $uyecekk['uye_id']; ?>" class="buton buton-yesil-siyah btn-block"><i class="glyphicon glyphicon-chevron-right"></i> Kullanıcı Profili</a></div>

            <div class="ulink"><a href="kullaniciilanlari.php?uye_id=<?php echo $uyecekk['uye_id']; ?>" class="buton buton-yesil-siyah  btn-block"><i class="glyphicon glyphicon-chevron-right"></i> Diğer İlanları</a></div>
                                    <br />
                        <div class="telefon">
              <label><i class="glyphicon glyphicon-phone"></i> </label>
              <?php echo $uyecekk['uye_telefon']; ?></div>
                                    <div class="telefon">
              <label><i class="glyphicon glyphicon-home"></i> </label>
              <?php echo $uyecekk['uye_mail']; ?> </div>
                                                <br />
                                    <a data-toggle="modal" data-target="#hatirlat" href="javascript:;" class="buton buton-siyah-yesil btn-block bleft"><i class="fa fa-envelope"></i> Mesaj Gönder</a>
                        <a data-toggle="modal" data-target="#hatirlat" href="javascript:;" class="buton buton-yesil-siyah btn-block bleft"><i class="fa fa-star"></i> Favorilerime Ekle</a> <a data-toggle="modal" data-target="#hatirlat" href="javascript:;" class="buton buton-yesil-siyah btn-block bleft"><i class="fa fa-minus-circle"></i> İlanı Şikayet Et</a> <a href="javascript:void()" data-toggle="modal" data-target="#harita" class="buton buton-yesil-siyah btn-block bleft"><i class="fa fa-map-marker"></i> Haritada Görüntüle</a> 
           
            <a href="http://www.facebook.com/share.php?u=http://v2.ilanscripti.org/sahibinden-temiz-mitsubishi-24.html" onClick="return fbs_click(650, 450)" target="_blank" title="" class="buton buton-mavi-siyah btn-block bleft"><i class="fa fa-facebook"></i> Facebookta Paylaş</a>
                      </div>
        </div>
              

        
      </div>
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body"><br>
    <h3 class="title"><i class="fa fa-pencil"></i> İlan Açıklaması</h3>
    <br />
    <p><span style="color: rgb(51, 51, 51);"><?php echo $urunncek['urun_aciklama']; ?></span></p><br />
  </div>
</div><div class="panel panel-default">
  
<div class="modal fade" id="yorum" tabindex="-1" role="dialog" aria-labelledby="megafotoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:10px">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="title" id="myModalLabel">Yorum</h4>
      <br />
      <form id="form1" name="form1" method="post" action="http://v2.ilanscripti.org/systems/yorum/yorumgonder_k.php?id=24" onsubmit="return gonder()">
        <div class="form-group">
          <textarea name="a2" id="a2" cols="" rows="" class="form-control" required></textarea>
        </div>
        <input name="g&ouml;nder" type="submit" value="Yorumu Gönder" class="btn btn-primary turuncu" />
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="sikayet" tabindex="-1" role="dialog" aria-labelledby="megafotoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:10px">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="title" id="myModalLabel">Şikayet</h4>
      <br />
      <form id="form1" name="form1" method="post" action="http://v2.ilanscripti.org/systems/sikayetgonder.php?id=24" >
        <div class="form-group">
          <label for="a1">Konu </label>
          <input type="text" name="a1" id="a1" value="İlan No : 24- Sahibinden Temiz Mitsubishi" class="form-control" readonly/>
        </div>
        <div class="form-group">
          <label for="a1">Şikayetiniz </label>
          <textarea name="a2" id="a2" cols="" rows="" class="form-control" required></textarea>
        </div>
        <input name="g&ouml;nder" type="submit" value="Mesajı Gönder" class="btn btn-primary turuncu"  />
      </form>
    </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title"><i class="fa fa-files-o"></i> Benzer İlanlar <div class="pull-right"><a data-slide="prev" href="#myCarousel2" style="font-size:24px">‹</a> <a data-slide="next" href="#myCarousel2" style="font-size:24px">›</a></div>
    </h3>
  </div>
  <div class="panel-body">
    <div class="carousel slide" id="myCarousel2">
      <div class="carousel-inner">
        <div class="item active"><ul class="ilanlar">
          <?php $benzersor="SELECT * FROM urunler ORDER BY RAND() LIMIT 9;";
            $sql=mysqli_query($con,$benzersor);
            while($benzercek=mysqli_fetch_assoc($sql)){ ?>
		<li>
		<div class="resimbox"><a href="ilandetay.php?urun_id=<?php echo $benzercek['urun_id'];?>&urun_kulid=<?php echo $benzercek['urun_kulid'];?>"><img src="alsatadmin/<?php echo $benzercek['urun_foto'];?>" alt="<?php echo $benzercek['urun_ad'];?>" title="<?php echo $benzercek['urun_ad'];?>" /></a></div>
		<div class="ilanbaslik"><a href="ilandetay.php?urun_id=<?php echo $benzercek['urun_id'];?>&urun_kulid=<?php echo $benzercek['urun_kulid'];?>" alt="<?php echo $benzercek['urun_ad'];?>" title="<?php echo $benzercek['urun_ad'];?>"><?php echo $benzercek['urun_ad'];?></a></div>
</li>
<?php } ?>
		</ul></div>   
       </div>
    </div>
    <br style="clear:both" />
  </div>
</div>
<style>
.slide {
	border:none !important
}
.ilanlar li {
	float: left;
	margin-right: 6.5px;
	width: 116px;
	margin-top: 5px;
	height: 110px;
	border: solid 1px #eee;
	padding: 5px;
	text-align: center;
	position: relative;
	font-size: 11px
}
</style>



<div class="modal fade" id="hatirlat" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-bell"></i> NKÜ PROJE UYARI: Aktif Değil</h4>
      </div>
      <div class="modal-body"> Bu Özellik Şuan İçin Aktif Değildir..! </div>
      <div class="modal-footer">
        <button type="button" class="buton buton-yesil-siyah" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mesaj" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-envelope"></i> Mesaj Gönder</h4>
      </div>
      <div class="modal-body">
        <form id="form1" name="form1" method="post" action="" >
          <div class="form-group">
            <label for="a1">Konu</label>
            <input type="text" name="a1" id="a1" value="Sahibinden Temiz Mitsubishi" class="form-control" required="required" />
          </div>
          <div class="form-group">
            <label>Mesaj</label>
            <textarea name="a2" id="a2" cols="" rows="" class="form-control" required></textarea>
          </div>
    
          <div class="row modal-footer">
            <button type="button" class="buton buton-siyah-yesil" data-dismiss="modal">Kapat</button>
            <button name="gonder" class="buton buton-yesil-siyah"> GÖNDER </button>
          
          </div>
        </form>
       </div> 
    </div>
  </div>
</div>
</div>
</div>

	<?php 
include 'php/footer.php';
?>