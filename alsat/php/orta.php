

<div class="row visible-lg" style="margin-bottom:20px">
  <div class="col-lg-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"  class="active" ></li>      </ol>
      <div class="carousel-inner" role="listbox">
        
  <div class="item active">
      <img src="uploads/sliderone_2.jpg">
  </div>
        </div>
      
      <!-- Left and right controls --> 
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
</div>


<div class="col-lg-12 hizli-banner visible-lg">
  
</div>
<br style="clear:both" class="hidden-md hidden-xs hidden-sm" />
<br class="hidden-md hidden-sx hidden-sm"  />

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title">Anasayfa Vitrini</h3>
  </div>
  <div class="panel-body">
    <ul class="ilanlar">

<?php 
$urunvitrinsor=mysqli_query($con, "SELECT * FROM urunler where urun_vitrin='1' LIMIT 28;"); 
while($urunvitrincek=mysqli_fetch_assoc($urunvitrinsor)){
?>
      
		<li>
		<div class="resimbox"><a href="ilandetay.php?urun_id=<?php echo $urunvitrincek['urun_id'];?>&urun_kulid=<?php echo $urunvitrincek['urun_kulid'];?>"><img src="alsatadmin/<?php echo $urunvitrincek['urun_foto'];?>" alt="<?php echo $urunvitrincek['urun_ad'];?>" title="<?php echo $urunvitrincek['urun_ad'];?>" /></a></div>
		<div class="ilanbaslik"><a href="ilandetay.php?urun_id=<?php echo $urunvitrincek['urun_id'];?>&urun_kulid=<?php echo $urunvitrincek['urun_kulid'];?>" alt="<?php echo $urunvitrincek['urun_ad'];?>" title="<?php echo $urunvitrincek['urun_ad'];?>"><?php echo substr($urunvitrincek['urun_ad'],0,25);?>...</a></div>
		</li><?php } ?>
		
		    </ul>
  </div>
</div>
<div class="hidden-xs bannerc"><a href=" " target="_blank"><img src="uploads/banner001_9.jpg"></a></div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title">Öne Çıkanlar </h3>
  </div>
  <div class="panel-body">
    <ul class="ilanlar">
      
		<?php $ilanrastgelesor="SELECT * FROM urunler ORDER BY RAND() LIMIT 21;";
            $sql=mysqli_query($con,$ilanrastgelesor);
            while($ilanrastgelecek=mysqli_fetch_assoc($sql)){ ?>
		
		<li>
		<div class="resimbox"><a href="ilandetay.php?urun_id=<?php echo $ilanrastgelecek['urun_id'];?>&urun_kulid=<?php echo $ilanrastgelecek['urun_kulid'];?>"><img src="alsatadmin/<?php echo $ilanrastgelecek['urun_foto'];?>" alt="<?php echo $ilanrastgelecek['urun_ad'];?>" title="<?php echo $ilanrastgelecek['urun_ad'];?>" /></a></div>
		<div class="ilanbaslik"><a href="ilandetay.php?urun_id=<?php echo $ilanrastgelecek['urun_id'];?>&urun_kulid=<?php echo $ilanrastgelecek['urun_kulid'];?>" alt="<?php echo $ilanrastgelecek['urun_ad'];?>" title="<?php echo $ilanrastgelecek['urun_ad'];?>"><?php echo substr($ilanrastgelecek['urun_ad'],0,25);?>...</a></div>
		</li>

		<?php }?>
		    </ul>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title">Son Eklenen İlanlar </h3>
  </div>
  <div class="panel-body">
    <ul class="ilanlar">

    	<?php $ilansonsor="SELECT * FROM urunler Order By urun_id DESC LIMIT 7;";
            $sql=mysqli_query($con,$ilansonsor);
            while($ilansoncek=mysqli_fetch_assoc($sql)){ ?>
      
		<li>
		<div class="resimbox"><a href="ilandetay.php?urun_id=<?php echo $ilansoncek['urun_id'];?>&urun_kulid=<?php echo $ilansoncek['urun_kulid'];?>"><img src="alsatadmin/<?php echo $ilansoncek['urun_foto'];?>" alt="<?php echo $ilansoncek['urun_ad'];?>" title="<?php echo $ilansoncek['urun_ad'];?>" /></a></div>
		<div class="ilanbaslik"><a href="ilandetay.php?urun_id=<?php echo $ilansoncek['urun_id'];?>&urun_kulid=<?php echo $ilansoncek['urun_kulid'];?>" alt="<?php echo $ilansoncek['urun_ad'];?>" title="<?php echo $ilansoncek['urun_ad'];?>"><?php echo substr($ilansoncek['urun_ad'],0,25);?>...</a></div>
		</li>
		<?php }?>
		    </ul>
  </div>
</div>
    </div>
  </div>
  </div>
</div>