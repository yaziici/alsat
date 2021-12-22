
<div class="topmenu site-rengi"> </div>
<div class="container main">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3" >

      <div class="panel panel-default">
        <div class="panel-heading">

<?php if (@$_GET['giris']=="yes") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>BAŞARILI!</strong> Giriş Yapıldı.
                            </div>
                          <?php } ?>

          <h3 class="title"><i class="fa fa-list"></i> Kategoriler</h3>
        </div>
        <div class="panel-body">
   <?php
     $kategorisor="SELECT * FROM kategori order by kategori_sira ASC";
     $sql=mysqli_query($con,$kategorisor);
     while($kategoricek=mysqli_fetch_assoc($sql)){ ?>       
<div class="panel-group" id="accordion" style="margin-bottom:0px !important">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
       <a href="altkat.php?altkat_ustid=<?php echo $kategoricek['kategori_id'];?>"><img src="ikonlar/<?php echo $kategoricek['kategori_icon']; ?>" width="16" height="16" class="absmiddle" /> <?php echo $kategoricek['kategori_ad']; ?></a>
      </h4>
    </div>
  </div>
</div>
    <?php } ?>
<style>
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 0px !important;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
	padding-top:5px !important;
	padding-bottom:5px !important
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th a {
	font-size:14px !important;
	color:#000000
}
</style>
        </div>
      </div>
          
      <div class="altbosluk hidden-sm hidden-xs"></div>
      <div class="hidden-sm hidden-xs"><a href=" " target="_blank"><img src="uploads/magaza_11.jpg"></a></div>
      <br class="hidden-sm hidden-xs">
      
      <br  class="hidden-sm hidden-xs">
     
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12" >
      <script>

function cat(){
	var e = $("#a1").val();
	$.post('systems/cat.html',{id:e},function(output){
		$("#a2 option").remove();
		$("#a2").append(output);
	});	
}
</script>
