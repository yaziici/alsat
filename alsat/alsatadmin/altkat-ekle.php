<?php 
include 'header.php'; 
include 'sidebar.php'; 
?>
<?php 


?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">PROJE 1</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Alt Kategori Ekliyorsunuz</h1>
          <div class="row grid-margin">
            <div style="width: 100%;">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-legend-container small-chart-container">
                                                      <?php 

                              if (@$_GET['durum']=="ok") { ?>

                                <div class="alert alert-success" role="alert">
                                 <strong>BAŞARILI!</strong> Kategori Eklendi.
                                </div>
                            <?php  } ?>


                                <form name="altkatkaydet" action="islem.php" method="POST" enctype="multipart/form-data">

                                  

                                 <div class="form-group">
                                  <label>Alt Kategori Adı</label>
                                  <input class="form-control" type="text" name="altkat_ad" placeholder="Kategori Adını Giriniz">
                                </div>
                                 <div class="form-group">
                                  <label>Üst Kategori </label>
                                   <select name="altkat_ustid" id="altkat_ustid" class="form-control">
              <option value="">Seçiniz</option>
              <?php $katsor="SELECT * FROM kategori ";
                              $sql=mysqli_query($con,$katsor);
                              while($katcek=mysqli_fetch_assoc($sql)){ ?>
                          <option value="<?php echo $katcek['kategori_id']; ?>"><?php echo $katcek['kategori_ad']; ?></option>
              <?php } ?>
            </select>
                                </div>
                            
                                
                                </div>
                                <input class="btn btn-success" style="width: 100%" type="submit" name="altkatkaydet" value="Kategori Ekle"/>
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
