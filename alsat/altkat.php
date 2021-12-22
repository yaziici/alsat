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
<li><a href="index.php">« Tüm Kategoriler</a></li>


	<li><a href="#" title="<?php echo $kategoriicek['kategori_ad']; ?>"><?php echo $kategoriicek['kategori_ad']; ?></a> 
		<ul class="kategoriler2">
			<?php
				$kategorisor="SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid WHERE kategori_id=$_GET[altkat_ustid] ORDER BY altkat_id ASC ";
                $sql=mysqli_query($con,$kategorisor);
                while($kategoricek=mysqli_fetch_assoc($sql)){ ?>
			<li><a href="#" title="<?php echo $kategoricek['altkat_ad']; ?>"><?php echo $kategoricek['altkat_ad']; ?></a></li>
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
     
      <br  class="hidden-sm hidden-xs">
     
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12" >
      
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
  <div class="col-md-10"> </strong> Aramanızda bulunan ilanlar aşağıdadır.<br>
  </div>
  <div class="col-md-2">
    <span class="pull-right liste"> <a href="emlak-kategorino-1.html?id=2"><i class="glyphicon glyphicon-th" data-toggle="tooltip" data-placement="left" title="Katalog Görünümü"></i></a> <a href="emlak-kategorino-1.html?id=1" ><i class="glyphicon glyphicon-th-list" data-toggle="tooltip" data-placement="left" title="Liste Görünümü"></i></a> </span>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<br>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"> <a href="#"><?php echo $kategoriicek['kategori_ad']; ?></a></li>
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
    <?php $urunsor="SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid INNER JOIN urunler ON altkategori.altkat_id = urunler.urun_ustid WHERE kategori_id=$_GET[altkat_ustid] ";
                              $sql=mysqli_query($con,$urunsor);
                              while($uruncek=mysqli_fetch_assoc($sql)){ ?>
       <tr class="ilanlar" data-id="ilandetay.php?urun_id=<?php echo $uruncek['urun_id'];?>&urun_kulid=<?php echo $uruncek['urun_kulid'];?>">
                <td style="padding:0px !important"><center>
                    <img src="alsatadmin/<?php echo $uruncek['urun_foto']; ?>" width="100" height="100" class="img-responsive" style="max-height:100px">
                  </center></td>
                <td><?php echo $uruncek['urun_ad']; ?></td>
                <td class="center fiyat"><?php echo $uruncek['urun_fiyat']; ?> TL</td>
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