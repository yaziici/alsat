<?php include 'php/header.php'; ?>
<?php include 'php/sol.php'; 
$uyesor=mysqli_query($con, "SELECT * FROM uyeler where uye_id=$_GET[uye_id]"); 
$uyecek=mysqli_fetch_assoc($uyesor);
?>

<?php
$urunsor=mysqli_query($con,"select * from urunler where urun_id=$urun_id");
$uruncek=mysqli_fetch_assoc($urunsor)
?>
    <div class="col-sm-12 col-md-8 col-lg-12 col-xs-12" >


      
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="title"><?php echo $uyecek['uye_ad'];?> adlı kullanıcının diğer ilanları</h3>
  </div>
  <div class="panel-body">
    <ul class="ilanlar">

    	<?php $urunsor="SELECT * FROM uyeler INNER JOIN urunler ON uyeler.uye_id = urunler.urun_kulid WHERE uye_id=$uyecek[uye_id] ORDER BY urun_id ASC ";
                              $sql=mysqli_query($con,$urunsor);
                              while($uruncek=mysqli_fetch_assoc($sql)){ ?>
      
		<li>
		<div class="resimbox"><a href="ilandetay.php?urun_id=<?php echo $uruncek['urun_id'];?>"><img src="alsatadmin/<?php echo $uruncek['urun_foto']; ?>" alt="Acer Laptop" title="Acer Laptop" /></a></div>
		<div class="ilanbaslik"><a href="ilandetay.php?urun_id=<?php echo $uruncek['urun_id'];?>" alt="<?php echo $uruncek['urun_ad'];?>" title="<?php echo $uruncek['urun_ad'];?>"><?php echo $uruncek['urun_ad'];?></a></div>
		</li>

		 <?php }?>
		
		    </ul>
  </div>
</div>
    </div>
  </div>
  </div>
</div>
<?php include 'php/footer.php'; ?>