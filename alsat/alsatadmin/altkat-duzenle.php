<?php 
include 'header.php'; 
include 'sidebar.php'; 

$altkat_id=$_GET['altkat_id'];
$kategorisor=mysqli_query($con,"select * from altkategori where altkat_id='$altkat_id'");
$kategoricek=mysqli_fetch_assoc($kategorisor);
?>

<?php
 $altkatsor=mysqli_query($con, "SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid WHERE kategori_id=$_GET[altkat_ustid] "); 
$altkatcek=mysqli_fetch_assoc($altkatsor);
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


                                <form name="altkategoriduzenle" action="islem.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                  <label>Kategori Adı</label>
                                  <input class="form-control" type="text" name="altkat_ad" value="<?php echo $kategoricek['altkat_ad']; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Üst Kategori </label>
                                   <select name="altkat_ustid" id="altkat_ustid" class="form-control">
                                    <option value="<?php echo $kategoricek['altkat_ustid']; ?>"><?php echo $altkatcek['kategori_ad']; ?></option>
              <option value="">Seçiniz</option>
              <?php $katsor="SELECT * FROM kategori ";
                              $sql=mysqli_query($con,$katsor);
                              while($katcek=mysqli_fetch_assoc($sql)){ ?>
              <option value="<?php echo $katcek['kategori_id']; ?>"><?php echo $katcek['kategori_ad']; ?></option>
              <?php } ?>
            </select>
                                </div>
								                


                                <input type="hidden" name="altkat_id" value="<?php echo $kategoricek['altkat_id'];?>">
                                <input class="btn btn-success" style="width: 100%" type="submit" name="altkategoriduzenle" value="Kategori Düzenle"/>
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
