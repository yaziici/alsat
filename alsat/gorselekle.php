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
    <h3 class="title"><i class="fa fa-user-plus fa-lg"></i> İlan Düzenle</h3>
  </div>
  <div class="panel-body">Ürünler ile ilgili doğru bilgiler kaydedilmelidir. Bu bilgilerin doğruluğu ile; Çağrı merkezi hizmetlerimizden faydalanmak istediğinizde bu bilgiler ile teyit edileceksiniz.
    <div class="row"><br>

      <form action="alsatadmin/galeri.php" class="dropzone">
        <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
</form>

<div class="inner-body mg-main col-md-12">
              
                <div class="footer2">

                  <p style="font-size:20px;margin-top: 1%; color: white; text-align: left;margin-left: 2%;">Ürün Galerisi</p>
                  <?php if (@$_GET['silme']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Resim Kaldırıldı.
                            </div>
                          <?php } ?>
                  
                </div>

                <?php $urunfotosor="select * from urunfoto where urun_id=$_GET[urun_id] order by urunfoto_id";
                              $sql=mysqli_query($con,$urunfotosor);
                              while($urunfotocek=mysqli_fetch_assoc($sql)){ ?>
<div class="col-md-4" style="margin-top: 4%">
                <a> <img style="width: 85%; border: 5px solid #555;" src="alsatadmin/<?php echo $urunfotocek['urunfoto_resimurl']; ?>"> </a>  

                  <div style="margin-top: 5%; width: auto; text-align: center;" class="col-sm-6"> 
                  <a href="alsatadmin/islem.php?urun_id=<?php echo $urunfotocek['urun_id'] ?>&urunfoto_id=<?php echo $urunfotocek['urunfoto_id'] ?>&fotosil=ok&urunfotosil=<?php echo $urunfotocek['urunfoto_resimurl']?>"><button class="btn btn-danger">Fotoğrafı Kaldır</button></a>
                </div>
              </div>
                                  

               

              <?php } ?>
            
              </div>

        

          

       

      
    </div>
  </div>
</div>
</div>
</div>

	<?php 
include 'php/footer.php';
?>