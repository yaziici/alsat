<?php 
include 'header.php'; 
include 'sidebar.php'; 

$kategori_id=$_GET['kategori_id'];
$kategorisor=mysqli_query($con,"select * from kategori where kategori_id='$kategori_id'");
$kategoricek=mysqli_fetch_assoc($kategorisor);
?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">Proje 1</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Kategori Düzenliyorsunuz</h1>
          <div class="row grid-margin">
            <div style="width: 100%;">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-legend-container small-chart-container">
                           
                           <?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Kategori Düzenlendi.
                            </div>
                          <?php } ?>


                                <form name="kategoriduzenle" action="islem.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                  <label>Kategori Adı</label>
                                  <input class="form-control" type="text" name="kategori_ad" value="<?php echo $kategoricek['kategori_ad']; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Kategori Sırası</label>
                                  <input class="form-control" type="text" name="kategori_sira" value="<?php echo $kategoricek['kategori_sira']; ?>">
                                </div>
								                


                                <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id'];?>">
                                <input class="btn btn-success" style="width: 100%" type="submit" name="kategoriduzenle" value="Kategori Düzenle"/>
                                </form>            
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>






        

 <?php include 'footer.php';?>
