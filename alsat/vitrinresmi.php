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

      <form name="vitringorseldegis" action="alsatadmin/islem.php" method="POST" enctype="multipart/form-data">
<div class="inner-body mg-main col-md-12">
                <div class="footer2">
                  <p style="font-size:20px;margin-top: 1%; color: white; text-align: left;margin-left: 2%;">Ürün Vitrin Resimi</p>
                  
                </div>     

                <?php if (@$_GET['silme']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Resim Kaldırıldı.
                            </div>
                          <?php } ?>
                          <?php if (@$_GET['vitrin']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Vitrin Resmi Değiştrildi.
                            </div>
                          <?php } ?>      
 <div class="col-md-12">
          <div class="form-group">
<br>
            <div class="form-group">
              <label><p style="color: red;font-weight: bold;"></p></label>   <br> 
              <img style="width: 30%" src="alsatadmin/<?php echo $uruncek['urun_foto']; ?>">     <hr>   
             <div class="form-group">
              <label>Yeni Ürün Vitrin Resimi</label>              
              <input type="file" name="vitringorsel" data-max-file-size="2mb">
             </div>
              <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
              <input class="btn btn-success" style="width: 100%" type="submit" name="vitringorseldegis" value="Vitrin Resmi Değiştir">
            </div>
          </div>  
 </div>
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