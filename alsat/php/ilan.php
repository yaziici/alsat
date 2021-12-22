
<div class="topmenu site-rengi"> </div>
<div class="container main">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3" >

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="title"><i class="fa fa-list"></i> Kategoriler</h3>
        </div>
        <div class="panel-body">
          
<div class="panel-group" id="accordion" style="margin-bottom:0px !important">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a href="ilanlarim"><img src="ikonlar/acil.png" width="16" height="16" class="absmiddle" /> İlanlarim</a>
</h4>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a href="profilim"><img src="ikonlar/acil.png" width="16" height="16" class="absmiddle" /> Profilim</a>
</h4>
</div>
</div>



</div>

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
      <div class="panel panel-default visible-md visible-lg">
        <div class="panel-heading">
          <h3 class="title"><i class="fa fa-newspaper-o"></i> Haberler</h3>
        </div>
        <div class="panel-body">
          <ul id="haberler">
            
		<li class="news-item">
		<h3 class="title"><a href="haber-6-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-6-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-5-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-5-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-4-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-4-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>
		<li class="news-item">
		<h3 class="title"><a href="haber-3-ornek-haber.html" title="Örnek Haber">Örnek Haber</a></h3><div>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</div>
		<br class="hidden-sm hidden-xs"/>
		<a href="haber-3-ornek-haber.html" title="Örnek Haber">Detaylı Bilgi</a>
		</li>          </ul>
        </div>
      </div>
      <div class="hidden-sm hidden-xs"><a href=" " target="_blank"><img src="uploads/magaza_8.jpg"></a></div>
      <br  class="hidden-sm hidden-xs">
     
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12" >
      <script>
function ilcelerhizli(){
	var e = $("#a3").val();
	$.post('systems/kategori/ilce.html',{id:e},function(output){
		$("#a4 option").remove();
		$("#a4").append(output);
	});	
}
function cat(){
	var e = $("#a1").val();
	$.post('systems/cat.html',{id:e},function(output){
		$("#a2 option").remove();
		$("#a2").append(output);
	});	
}
</script>
<div class="row visible-lg" style="margin-bottom:20px">

</div>
