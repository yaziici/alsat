<?php 
include 'header.php';
include 'sidebar.php';
?>

        <div class="content-wrapper">
          <h1 class="page-title">Proje 1</h1>
          <div class="card">

            <div class="card-body">

              <h2 class="card-title">Ürünler</h2>

              <div class="row">
                <div class="col-12">

                  <table id="order-listing" class="table" cellspacing="0" width="100%">

                    <thead>

                      <tr>
                          <th style="width: 20%">İlan Sahibi</th>
                          <th style="width: 45%">Ürün Adı</th>
                          <th style="width: 20%">Ürün Resim</th>
                          <th style="width: 10%">Ürün Kategori</th>
                          <th style="width: 10%">Anasayfada Göster</th>
                          <!--<th style="width: 10%">Resim İşlemleri</th>-->
                          <th style="width: 10%">İşlemler</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <?php
                         $urunsor=mysqli_query($con,"SELECT * FROM altkategori INNER JOIN urunler ON altkategori.altkat_id = urunler.urun_ustid INNER JOIN uyeler ON uyeler.uye_id = urunler.urun_kulid");
                         while ($uruncek=mysqli_fetch_assoc($urunsor)) {
                         ?>
                      <tr>
                        
                          <td><?php echo $uruncek['uye_kadi'];?></td>
                          <td><?php echo $uruncek['urun_ad'];?></td>
                          <td><img style="width: 100px; height: 60px;" src="<?php echo $uruncek['urun_foto'];?>"></td>
                          <td><?php echo $uruncek['altkat_ad'];?></td>
                          
                        <!--  <td><a href="urun-ana-galeri.php?urun_id=<?php echo $uruncek['urun_id']; ?> "><button class="btn btn-outline-primary">Ana Resim Düzenle</button></a>
                          <a href="urun-galeri.php?urun_id=<?php echo $uruncek['urun_id']; ?> "><button class="btn btn-outline-primary">Diğer Resimleri Düzenle</button></a></td> -->

                          <td><?php if ($uruncek['urun_vitrin']== 0){ ?>
<p style="color: red; ">Hayır</p>
<?php } else { ?> <p style="color: green;">Evet</p> <?php } ?> </td>
                          <td>
                            <a href="islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunvitrin=ok"><button class="btn btn-outline-primary">Vitrine Ekle</button></a>
                            <a href="islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunvitrin=no"><button class="btn btn-outline-primary">Vitrinden Kaldır</button></a>
                            <a href="islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunsil=ok&urunresimsil=<?php echo $uruncek['urun_foto'];?>" onclick="return confirmDel();"><button class="btn btn-danger btn-sm">Kaldır</button></a>
                          </td>
                              
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php include 'footer.php'; ?>

        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/zoom/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 11:49:19 GMT -->
</html>
