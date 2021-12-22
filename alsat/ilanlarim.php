			<?php 
include 'php/header.php';
?>
		
				<?php 
include 'php/ilan.php';

$uyesor=mysqli_query($con, "SELECT * FROM uyeler where uye_kadi='$_SESSION[uye_kadi]'"); 
$uyecek=mysqli_fetch_assoc($uyesor);
?>



<div class="panel panel-default">
<div class="panel-heading"> 
 
  <h3 class="title"><?php echo $kategoriicek['kategori_ad']; ?></h3>
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-10">Hoşgeldiniz <strong><?php echo $_SESSION['uye_kadi']; ?></strong>. İlanlarınız Aşağıdadır.<br>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<br>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"> <a href="#">İlanlarım</a></li>

</ul>
<br />
<div class="table-responsive">
<table class="table-striped table-hover" width="100%">
<thead>
  <tr>
    <th width="110"></th> <?php if (@$_GET['silme']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Ürün Silindi.
                            </div>
                          <?php } ?>

                          <?php if (@$_GET['duzenle']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> İlan Düzenlendi
                            </div>
                          <?php } ?>

                           <?php if (@$_GET['ilan']=="ok") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> İlanınız Eklendi
                            </div>
                          <?php } ?>
    <th width="">İlan Başlığı</th>
    <th width="15%" class="center">Fiyat</th>
    <th width="15%" class="center">İlan Tarihi</th>
    <th width="15%" class="center">İl / İlçe</th>
    <th width="15%" class="center">Düzenle</th>
    <th width="15%" class="center">Resim İşlemleri</th>
  </tr>
    </thead>
  <tbody>
    <?php $urunsor="SELECT * FROM uyeler INNER JOIN urunler ON uyeler.uye_id = urunler.urun_kulid WHERE uye_id=$uyecek[uye_id] ORDER BY urun_id ASC ";
                              $sql=mysqli_query($con,$urunsor);
                              while($uruncek=mysqli_fetch_assoc($sql)){ ?>
       <tr class="ilanlar" data-id="ilandetay.php?urun_id=<?php echo $uruncek['urun_id'];?>">
                <td style="padding:0px !important"><center>
                      <a href="ilandetay.php?urun_id=<?php echo $uruncek['urun_id'];?>&urun_kulid=<?php echo $uruncek['urun_kulid'];?>"><img src="alsatadmin/<?php echo $uruncek['urun_foto']; ?>" width="100" height="100" class="img-responsive" style="max-height:100px"></a>
                  </center></td>
                <td><?php echo $uruncek['urun_ad']; ?></td>
                <td class="center fiyat"><?php echo $uruncek['urun_fiyat']; ?> TL</td>
                <td class="center"><?php echo $uruncek['urun_ilantarih']; ?></td>
                <td class="center"><?php echo $uruncek['urun_il']; ?><br><?php echo $uruncek['urun_ilce']; ?></td>
                <td class="center">

                                  <a href="alsatadmin/islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunnsil=ok&urunresimsil=<?php echo $uruncek['urun_foto'];?>" onclick="return confirmDel();">
                                    <button class="btn btn-danger btn-sm">Kaldır</button></a><br><br>
                                  <a href="ilanduzenle.php?urun_id=<?php echo $uruncek['urun_id']; ?> "><button style="font-size: 12px;" class="btn btn-outline-primary">Düzenle <i class='fas fa-edit'></i></button></a><br>
                                  
                </td>
                <td class="center">

                                  <a href="vitrinresmi.php?urun_id=<?php echo $uruncek['urun_id']; ?> "><button style="font-size: 12px;" class="btn btn-outline-primary">Vitrin Resmi</button></a><br><br>
                                  <a href="gorselekle.php?urun_id=<?php echo $uruncek['urun_id']; ?> "><button style="font-size: 12px;" class="btn btn-outline-primary">Görsel Ekle</button></a>

                                  
                </td>


              </tr>
      <?php }?>
        </tbody>
</table>
</div>
<nav>

</nav>
</div>
</div>
</div>
</div>

  <?php 
include 'php/footer.php';
?>