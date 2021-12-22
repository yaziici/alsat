<?php 
include 'header.php'; 
include 'sidebar.php'; 
?>
<?php 


?>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title">Kategoriler</h1>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kategori Listesi</h5>   
              <a href="kategori-ekle.php"><button class="btn btn-primary btn-sm">Kategori Ekle</button></a>         
              <div class="row grid-margin">
                <div class="col-12">
                  <?php if (@$_GET['durum']=="ok") { ?>
                         <div class="alert alert-success" role="alert">
                          <strong>BAŞARILI!</strong> Kategori Eklendi.
                         </div>
                    <?php } ?>

                     <?php if (@$_GET['silme']=="ok") { ?>
                         <div class="alert alert-success" role="alert">
                           <strong>BAŞARILI!</strong> Kategori Silindi.
                           </div>
                     <?php } ?>
                      
                      <?php if (@$_GET['duzenle']=="ok") { ?>

                          <div class="alert alert-success" role="alert">
                           <strong>BAŞARILI!</strong> Kategori Düzenlendi.
                          </div>
                      <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th style="width: 25%">Kategori Sıra</th>
                          <th style="width: 25%">Kategori Adı</th>
                          
                          <th style="width: 25%">Kategori Icon</th>
                          <th style="width: 25%">Düzenlemeler</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
                         $kategorisor=mysqli_query($con,"select * from kategori order by kategori_sira ASC");
                         while ($kategoricek=mysqli_fetch_assoc($kategorisor)) {
                         ?>
					
                      <tr>
                          <td><?php echo $kategoricek['kategori_sira'];?></td>
                          <td><?php echo $kategoricek['kategori_ad'];?></td>
                          
                          <td><img style="width: 16px;height: 16px;" src="../ikonlar/<?php echo $kategoricek['kategori_icon'];?>"></td>

                          <td><a href="kategori-duzenle.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?> "><button class="btn btn-primary btn-sm">Düzenle</button></a>
                          
                          <a href="islem.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?>&kategorisil=ok&kategoriresimsil=<?php echo $kategoricek['kategori_icon'];?>" onclick="return confirmDel();"><button class="btn btn-danger btn-sm">Kaldır</button></a>  </td>

                          
                      </tr>   
<?php } ?> 					  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>






        

 <?php include 'footer.php';?>