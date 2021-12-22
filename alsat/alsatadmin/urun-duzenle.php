<?php 
include 'header.php'; 
include 'sidebar.php'; 

$urun_id=$_GET['urun_id'];
$urunsor=mysqli_query($con,"SELECT * FROM urunler WHERE urun_id='$urun_id'");
$uruncek=mysqli_fetch_assoc($urunsor);
?>

<head>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>


     <!-- partial -->

        <div class="content-wrapper">
          <h1 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;text-shadow: 3px 1px 9px;">PROJE 1</h1>
            <h3 class="page-title" style="TEXT-ALIGN:  center;font-size:  35px;">Ürün Düzenliyorsunuz</h1>
          <div class="row grid-margin">
            <div style="width: 100%;">
              <div class="card">
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-12">
                      <div class="custom-legend-container small-chart-container">
                           
                           <?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Ürün Düzenlendi.
                            </div>
                          <?php } ?>


                                <form name="urunduzenle" action="islem.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                  <label>Ürün Adı</label>
                                  <input class="form-control" type="text" name="urun_ad" value="<?php echo $uruncek['urun_ad']; ?>">
                                </div>
                                <div class="form-group">
                                  <label for="Kategori">Üst Kategori Seçiniz:</label><br>
                                  <select style="width: 20%" name="urun_ustid" id="urun_ustid">
                                    
                                    <option value="">--- ŞERİT MAK ---</option>
                                    <option value="2">Yarı Otomatik Açılı</option>
                                    <option value="3">Otomatik Açılı</option>
                                    <option value="4">Yarı Otomatik Sabit</option>
                                    <option value="5">Paket Kesim Serisi</option>
                                    <option value="6">Otomatik Sabit</option>
                                    <option value="7">Manuel Craft Serisi</option>
                                    <option value="">--- DAİRE MAK ---</option>
                                    <option value="8">Manuel</option>
                                    <option value="9">Mengene Otomatik</option>
                                    <option value="10">Yarı Otomatik</option>
                                    <option value="15">Tam Otomatik</option>
                                    <option value="">--- ŞERİT TESTERE ---</option>
                                    <option value="17">Bi-Metal Şerit Testere</option>
                                    <option value="16">Karbür Uçlu Şerit Testere</option>
                                    <option value="">--- DAİRE TESTERE ---</option>
                                    <option value="18">HSS DMo5 Daire Testere</option>
                                    <option value="19">TCT Daire Testere</option>
                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Ürün Fiyatı</label>
                                  <input class="form-control" type="text" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat']; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Ürün Açıklama</label>
                                  <textarea name="urun_aciklama" class="ckeditor"><?php echo $uruncek['urun_aciklama']; ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label>Ürün Teknik</label>
                                  <textarea name="urun_teknik" class="ckeditor"><?php echo $uruncek['urun_teknik']; ?></textarea>
                                </div>

                                <div class="form-group">
                                  <label>Ürün Sırası</label>
                                  <input class="form-control" type="text" name="urun_sira" value="<?php echo $uruncek['urun_sira']; ?>">
                                </div>
								                


                                <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'];?>">
                                <input class="btn btn-success" style="width: 100%" type="submit" name="urunduzenle" value="Ürün Düzenle"/>
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
