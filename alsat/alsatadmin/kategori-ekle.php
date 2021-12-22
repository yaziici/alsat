<?php 
include 'header.php'; 
include 'sidebar.php'; 
?>
<?php 


?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">Proje 1</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Kategori Ekliyorsunuz</h1>
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


                                <form name="kategorikaydet" action="islem.php" method="POST" enctype="multipart/form-data">

                                  

                                 <div class="form-group">
                                  <label>Kategori Adı</label>
                                  <input class="form-control" type="text" name="kategori_ad" placeholder="Kategori Adını Giriniz">
                                </div>
                                <div class="form-group">
                                  <label>Kategori Sıra</label>
                                  <input class="form-control" type="number" name="kategori_sira" value="0" placeholder="Kategori Sırasını Giriniz">
                                </div>
                            
                                  

                                  

                                </div>
                                <input class="btn btn-success" style="width: 100%" type="submit" name="kategorikaydet" value="Kategori Ekle"/>
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
