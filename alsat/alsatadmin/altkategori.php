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
              <a href="altkat-ekle.php"><button class="btn btn-primary btn-sm">Kategori Ekle</button></a>         
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
                          <th style="width: 25%">Üst Kategori</th>
                          <th style="width: 25%">Düzenlemeler</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
                         $kategorisor=mysqli_query($con,"SELECT * FROM kategori INNER JOIN altkategori ON kategori.kategori_id = altkategori.altkat_ustid WHERE kategori_id=altkat_ustid");
                         while ($kategoricek=mysqli_fetch_assoc($kategorisor)) {
                         ?>
					
                      <tr>
                          <td><?php echo $kategoricek['altkat_id'];?></td>
                          <td><?php echo $kategoricek['altkat_ad'];?></td>
                          <td><?php echo $kategoricek['kategori_ad'];?></td>
                          
                          <td><a href="altkat-duzenle.php?altkat_id=<?php echo $kategoricek['altkat_id']; ?>&altkat_ustid=<?php echo $kategoricek['altkat_ustid']; ?> "><button class="btn btn-primary btn-sm">Düzenle</button></a>
                          
                          <a href="islem.php?altkat_id=<?php echo $kategoricek['altkat_id']; ?>&altkatsil=ok" onclick="return confirmDel();"><button class="btn btn-danger btn-sm">Kaldır</button></a>  </td>

                          
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