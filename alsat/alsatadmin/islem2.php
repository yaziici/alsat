<?php 
error_reporting(0);
include "../php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");
session_start();
ob_start();

if(isset($_POST['loggin'])) {

    $admin_kadi=$_POST['admin_kadi'];
    $admin_sifre=md5($_POST['admin_sifre']);

    if($admin_kadi && $admin_sifre){

        $sorgula=mysqli_query($con,"SELECT * FROM admin WHERE admin_kadi='$admin_kadi' AND admin_sifre='$admin_sifre'");
        $verisay=mysqli_num_rows($sorgula);

        if($verisay>0){
            $_SESSION['admin_kadi'] = $admin_kadi;
            header('Location:index.php');
        } else{
            header('Location:login.php?login=no');
        }
    }
}



if(isset($_POST['ayar_genel'])) {



    $ayar_genel=mysqli_query(@$con,"UPDATE ayarlar set 
    	ayar_title='".@$_POST['ayar_title']."' ,        
        ayar_footer='".@$_POST['ayar_footer']."'
        where ayar_id='0'");

if(mysqli_affected_rows($con))

{header("Location:ayarlar.php?durum=ok");}
else {header("Location:ayarlar.php?durum=no");}
}

if(isset($_POST['ayar_iletisim'])) {



    $ayar_iletisim=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_telefon='".@$_POST['ayar_telefon']."' ,
        ayar_adres='".@$_POST['ayar_adres']."' ,
        ayar_mail='".@$_POST['ayar_mail']."' ,
        ayar_fax='".@$_POST['ayar_fax']."' ,
        ayar_instagram='".@$_POST['ayar_instagram']."' ,
        ayar_facebook='".@$_POST['ayar_facebook']."' where ayar_id='0'"); 

if(mysqli_affected_rows($con))

{ header("Location:ayarlar.php?durum=ok");}
else { header("Location:ayarlar.php?durum=no");}
}


if(isset($_POST['ayar_google'])) {



    $ayar_google=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_description='".@$_POST['ayar_description']."' ,
        ayar_keywords='".@$_POST['ayar_keywords']."' 
        where ayar_id='0'");

if(mysqli_affected_rows($con))

{ header("Location:ayarlar.php?durum=ok");}
else { header("Location:ayarlar.php?durum=no");}
}




if (isset($_POST['menukaydet'])) {


 $menuekle=mysqli_query(@$con, "INSERT INTO menuler (menu_sira,menu_ustid,menu_ad,menu_link) VALUES 
    ('".@$_POST['menu_sira']."','".@$_POST['menu_ustid']."','".@$_POST['menu_ad']."','".@$_POST['menu_link']."')");

 

 if (mysqli_affected_rows($con)) {
  
  header("Location:menuler.php?durum=ok");
 }
 else {

  header("Location:menuler.php?durum=no");

 }

}


if (isset($_POST['menuduzenle'])) {

    $menu_id=$_POST['menu_id'];

    $menuduzenle=mysqli_query(@$con,"UPDATE menuler set 
        menu_ad='".@$_POST['menu_ad']."' ,  
        menu_sira='".@$_POST['menu_sira']."' ,      
		menu_ustid='".@$_POST['menu_ustid']."' , 
        menu_link='".@$_POST['menu_link']."'
        where menu_id='$menu_id'");

if(mysqli_affected_rows($con))

{header("Location:menuler.php?duzenle=ok&menu_id=$menu_id");}
else {header("Location:menuler.php?duzenle=no&menu_id=$menu_id");}
}






if ($_GET['menusil']=="ok") {

    $menusil=mysqli_query($con, "DELETE from menuler where menu_id='".$_GET['menu_id']."'");

    

if(mysqli_affected_rows($con)){


    header("Location:menuler.php?silme=ok");

}
}


if (isset($_POST['hizmetresimduzenle'])) {

    $hizmet_id=$_POST['hizmet_id'];
    $uploads_dir = "uploads";
    @$tmp_name = $_FILES['hizmetgorsel']["tmp_name"];
    @$name = $_FILES['hizmetgorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $hizmetresimduzenle=mysqli_query(@$con,"UPDATE hizmet set     
        hizmet_resimurl='".@$refimgyol."' 
        where hizmet_id='$hizmet_id'");

if(mysqli_affected_rows($con))
{header("Location:hizmetler.php?duzenle=ok&hizmet_id=$hizmet_id");}
else 
{header("Location:hizmetler.php?duzenle=no&hizmet_id=$hizmet_id");}
}

if (isset($_POST['hizmetduzenle'])) {

    $hizmet_id=$_POST['hizmet_id'];


    $hizmetduzenle=mysqli_query(@$con,"UPDATE hizmet set 
        hizmet_ad='".@$_POST['hizmet_ad']."' ,  
        hizmet_aciklama='".@$_POST['hizmet_aciklama']."' ,   
        hizmet_sira='".@$_POST['hizmet_sira']."'
        where hizmet_id='$hizmet_id'");

if(mysqli_affected_rows($con))
{header("Location:hizmetler.php?duzenle=ok&hizmet_id=$hizmet_id");}
else 
{header("Location:hizmetler.php?duzenle=no&hizmet_id=$hizmet_id");}
}

if ($_GET['hizmetsil']=="ok") {

    echo $_GET['hizmetresimsil'];

    $hizmetsil=mysqli_query($con, "DELETE from hizmet where hizmet_id='".$_GET['hizmet_id']."'");

    

if(mysqli_affected_rows($con)){


    header("Location:hizmetler.php?silme=ok");

}
}

if(isset($_POST['hizmetkaydet'])) {

    $uploads_dir = "uploads";

    @$tmp_name = $_FILES['hizmetgorsel']["tmp_name"];

    @$name = $_FILES['hizmetgorsel']["name"];

    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;

    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



 $hizmetekle=mysqli_query(@$con, "INSERT INTO hizmet (hizmet_sira,hizmet_aciklama,hizmet_ad,hizmet_resimurl) 
    VALUES ('".@$_POST['hizmet_sira']."','".@$_POST['hizmet_aciklama']."','".@$_POST['hizmet_ad']."','".@$refimgyol."')");

 

 if (mysqli_affected_rows($con)) {
  
  header("Location:hizmetler.php?durum=ok");
 }
 else {

  header("Location:hizmetler.php?durum=no");

 }

}


if (isset($_POST['sayfakaydet'])) {


 $menuekle=mysqli_query(@$con, "INSERT INTO sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira) VALUES 
    ('".@$_POST['sayfa_ad']."','".@$_POST['sayfa_icerik']."','".@$_POST['sayfa_sira']."')");

 

 if (mysqli_affected_rows($con)) {
  
  header("Location:sayfalar.php?durum=ok");
 }
 else {

  header("Location:sayfalar.php?durum=no");

 }

}

if ($_GET['sayfasil']=="ok") {
    $menusil=mysqli_query($con, "DELETE from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:sayfalar.php?silme=ok");
}
}

if (isset($_POST['sayfaduzenle'])) {

    $sayfa_id=$_POST['sayfa_id'];

    $sayfaduzenle=mysqli_query(@$con,"UPDATE sayfalar set 
        sayfa_ad='".@$_POST['sayfa_ad']."' ,  
        sayfa_sira='".@$_POST['sayfa_sira']."' ,
        sayfa_icerik='".@$_POST['sayfa_icerik']."'
        where sayfa_id='$sayfa_id'");

if(mysqli_affected_rows($con))

{header("Location:sayfalar.php?duzenle=ok&sayfa_id=$sayfa_id");}
else {header("Location:sayfalar.php?duzenle=no&sayfa_id=$sayfa_id");}
}


if(isset($_POST['hizmetkaydett'])) {

    $uploads_dir = "uploads/hizmetler";

    @$tmp_name = $_FILES['hizmetgorsell']["tmp_name"];

    @$name = $_FILES['hizmetgorsell']["name"];

    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;

    $refimgyoll=substr($uploads_dir, 0)."/".$benzersizad.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



 $hizmetkaydett=mysqli_query(@$con, "INSERT INTO hizmetlerimiz (hizmet_sira,hizmet_icerik,hizmet_adi,hizmet_resimurl) 
    VALUES ('".@$_POST['hizmet_sira']."','".@$_POST['hizmet_icerik']."','".@$_POST['hizmet_adi']."','".@$refimgyoll."')");

 

 if (mysqli_affected_rows($con)) {
  
  header("Location:hhizmet.php?durum=ok");
 }
 else {

  header("Location:hhizmet.php?durum=no");

 }

}

if ($_GET['hhizmetsil']=="ok") {

    echo $_GET['hhizmetresimsil'];

    $hizmetsil=mysqli_query($con, "DELETE from hizmetlerimiz where hhizmet_id='".$_GET['hhizmet_id']."'");

    

if(mysqli_affected_rows($con)){


    header("Location:hhizmet.php?silme=ok");

}
}


if (isset($_POST['hhizmetresimduzenle'])) {

    $hhizmet_id=$_POST['hhizmet_id'];
    $uploads_dir = "uploads/hizmetler";
    @$tmp_name = $_FILES['hhizmetgorsel']["tmp_name"];
    @$name = $_FILES['hhizmetgorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $hhizmetresimduzenle=mysqli_query(@$con,"UPDATE hizmetlerimiz set     
        hizmet_resimurl='".@$refimgyol."' 
        where hhizmet_id='$hhizmet_id'");

if(mysqli_affected_rows($con))
{header("Location:hhizmet.php?duzenle=ok&hhizmet_id=$hhizmet_id");}
else 
{header("Location:hhizmet.php?duzenle=no&hhizmet_id=$hhizmet_id");}
}

if (isset($_POST['hhizmetduzenle'])) {

    $hhizmet_id=$_POST['hhizmet_id'];


    $hhizmetduzenle=mysqli_query(@$con,"UPDATE hizmetlerimiz set 
        hizmet_adi='".@$_POST['hizmet_adi']."' ,  
        hizmet_icerik='".@$_POST['hizmet_icerik']."' ,   
        hizmet_sira='".@$_POST['hizmet_sira']."'
        where hhizmet_id='$hhizmet_id'");

if(mysqli_affected_rows($con))
{header("Location:hhizmet.php?duzenle=ok&hhizmet_id=$hhizmet_id");}
else 
{header("Location:hhizmet.php?duzenle=no&hhizmet_id=$hhizmet_id");}
}


if(isset($_POST['kategorikaydet'])) {

    $uploads_dir = "uploads/kategori";
    @$tmp_name = $_FILES['kategorigorsel']["tmp_name"];
    @$name = $_FILES['kategorigorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $kategoriekle=mysqli_query(@$con, "INSERT INTO kategori (kategori_sira,kategori_short,kategori_ad,kategori_resimurl) 
    VALUES ('".@$_POST['kategori_sira']."','".@$_POST['kategori_short']."','".@$_POST['kategori_ad']."','".@$refimgyol."')");
 if (mysqli_affected_rows($con)) {
header("Location:kategoriler.php?durum=ok");}
 else {
header("Location:kategoriler.php?durum=no");}
}

if (isset($_POST['kategoriduzenle'])) {
    $kategori_id=$_POST['kategori_id'];
    $kategoriduzenle=mysqli_query(@$con,"UPDATE kategori set 
        kategori_ad='".@$_POST['kategori_ad']."' ,  
        kategori_short='".@$_POST['kategori_short']."' ,   
        kategori_sira='".@$_POST['kategori_sira']."'
        where kategori_id='$kategori_id'");
if(mysqli_affected_rows($con))
{header("Location:kategoriler.php?duzenle=ok&kategori_id=$kategori_id");}
else 
{header("Location:kategoriler.php?duzenle=no&kategori_id=$kategori_id");}
}

if ($_GET['kategorisil']=="ok") {
    echo $_GET['kategoriresimsil'];
    $kategorisil=mysqli_query($con, "DELETE from kategori where kategori_id='".$_GET['kategori_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:kategoriler.php?silme=ok");}
}

if (isset($_POST['kategoriresimduzenle'])) {

    $kategori_id=$_POST['kategori_id'];
    $uploads_dir = "uploads/kategori";
    @$tmp_name = $_FILES['kategorigorsel']["tmp_name"];
    @$name = $_FILES['kategorigorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $hhizmetresimduzenle=mysqli_query(@$con,"UPDATE kategori set     
        kategori_resimurl='".@$refimgyol."' 
        where kategori_id='$kategori_id'");

if(mysqli_affected_rows($con))
{header("Location:kategoriler.php?duzenle=ok&kategori_id=$kategori_id");}
else 
{header("Location:kategoriler.php?duzenle=no&kategori_id=$kategori_id");}
}


if(isset($_POST['categorykaydet'])) {

    $uploads_dir = "uploads/category";
    @$tmp_name = $_FILES['categorygorsel']["tmp_name"];
    @$name = $_FILES['categorygorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $categoryekle=mysqli_query(@$con, "INSERT INTO category (category_sira,category_ustid,category_ad,category_resimurl) 
    VALUES ('".@$_POST['category_sira']."','".@$_POST['category_ustid']."','".@$_POST['category_ad']."','".@$refimgyol."')");
 if (mysqli_affected_rows($con)) {
header("Location:altkategori.php?durum=ok");}
 else {
header("Location:altkategori.php?durum=no");}
}

if (isset($_POST['categoryduzenle'])) {
    $category_id=$_POST['category_id'];
    $kategoriduzenle=mysqli_query(@$con,"UPDATE category set 
        category_ad='".@$_POST['category_ad']."' ,  
        category_ustid='".@$_POST['category_ustid']."' ,   
        category_sira='".@$_POST['category_sira']."'
        where category_id='$category_id'");
if(mysqli_affected_rows($con))
{header("Location:altkategori.php?duzenle=ok&category_id=category_id");}
else 
{header("Location:altkategori.php?duzenle=no&category_id=$category_id");}
}

if (isset($_POST['categoryresimduzenle'])) {

    $category_id=$_POST['category_id'];
    $uploads_dir = "uploads/category";
    @$tmp_name = $_FILES['categorygorsel']["tmp_name"];
    @$name = $_FILES['categorygorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $hhizmetresimduzenle=mysqli_query(@$con,"UPDATE category set     
        category_resimurl='".@$refimgyol."' 
        where category_id='$category_id'");

if(mysqli_affected_rows($con))
{header("Location:altkategori.php?duzenle=ok&category_id=$category_id");}
else 
{header("Location:altkategori.php?duzenle=no&category_id=$category_id");}
}

if ($_GET['categorysil']=="ok") {
    echo $_GET['categoryresimsil'];
    $kategorisil=mysqli_query($con, "DELETE from category where category_id='".$_GET['category_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:altkategori.php?silme=ok");}
}

if ($_GET['urunsil']=="ok") {
    echo $_GET['urunresimsil'];
    $urunsil=mysqli_query($con, "DELETE from urunler where urun_id='".$_GET['urun_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:urunler.php?silme=ok");}
}

if(isset($_POST['urunkaydet'])) {

    $uploads_dir = "uploads/urunler";
    @$tmp_name = $_FILES['urungorsel']["tmp_name"];
    @$name = $_FILES['urungorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $urunekle=mysqli_query(@$con, "INSERT INTO urunler (urun_sira,urun_ustid,urun_ad,urun_foto,urun_teknik,urun_aciklama,urun_fiyat) 
    VALUES ('".@$_POST['urun_sira']."','".@$_POST['urun_ustid']."','".@$_POST['urun_ad']."','".@$refimgyol."','".@$_POST['urun_teknik']."','".@$_POST['urun_aciklama']."','".@$_POST['urun_fiyat']."')");
 if (mysqli_affected_rows($con)) {
header("Location:urunler.php?durum=ok");}
 else {
header("Location:urunler.php?durum=no");}
}

if (isset($_POST['urunduzenle'])) {
    $urun_id=$_POST['urun_id'];
    $urunduzenle=mysqli_query(@$con,"UPDATE urunler set 
        urun_ad='".@$_POST['urun_ad']."' ,  
        urun_ustid='".@$_POST['urun_ustid']."' ,   
        urun_teknik='".@$_POST['urun_teknik']."' , 
        urun_aciklama='".@$_POST['urun_aciklama']."' , 
        urun_fiyat='".@$_POST['urun_fiyat']."' , 
        urun_sira='".@$_POST['urun_sira']."'
        where urun_id='$urun_id'");
if(mysqli_affected_rows($con))
{header("Location:urunler.php?duzenle=ok&urun_id=urun_id");}
else 
{header("Location:urunler.php?duzenle=no&urun_id=$urun_id");}
}


if(isset($_POST['ikincielkaydet'])) {

    $uploads_dir = "uploads/ikinciel";
    @$tmp_name = $_FILES['ikincielgorsel']["tmp_name"];
    @$name = $_FILES['ikincielgorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $urunekle=mysqli_query(@$con, "INSERT INTO ikinciel (ikinciel_sira,ikinciel_stok,ikinciel_ad,ikinciel_foto,ikinciel_teknik,ikinciel_aciklama,ikinciel_fiyat) 
    VALUES ('".@$_POST['ikinciel_sira']."','".@$_POST['ikinciel_stok']."','".@$_POST['ikinciel_ad']."','".@$refimgyol."','".@$_POST['ikinciel_teknik']."','".@$_POST['ikinciel_aciklama']."','".@$_POST['ikinciel_fiyat']."')");
 if (mysqli_affected_rows($con)) {
header("Location:ikinciel.php?durum=ok");}
 else {
header("Location:ikinciel.php?durum=no");}
}

if (isset($_POST['ikincielduzenle'])) {
    $ikinciel_id=$_POST['ikinciel_id'];
    $urunduzenle=mysqli_query(@$con,"UPDATE ikinciel set 
        ikinciel_ad='".@$_POST['ikinciel_ad']."' ,  
        ikinciel_stok='".@$_POST['ikinciel_stok']."' ,   
        ikinciel_teknik='".@$_POST['ikinciel_teknik']."' , 
        ikinciel_aciklama='".@$_POST['ikinciel_aciklama']."' , 
        ikinciel_fiyat='".@$_POST['ikinciel_fiyat']."' , 
        ikinciel_sira='".@$_POST['ikinciel_sira']."'
        where ikinciel_id='$ikinciel_id'");
if(mysqli_affected_rows($con))
{header("Location:ikinciel.php?duzenle=ok&ikinciel_id=ikinciel_id");}
else 
{header("Location:ikinciel.php?duzenle=no&ikinciel_id=$ikinciel_id");}
}

if ($_GET['ikincielsil']=="ok") {
    echo $_GET['ikincielresimsil'];
    $urunsil=mysqli_query($con, "DELETE from ikinciel where ikinciel_id='".$_GET['ikinciel_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:ikinciel.php?silme=ok");}
}


if (isset($_POST['varkaydet'])) {
 $varekle=mysqli_query(@$con, "INSERT INTO urunvaryasyon (oz1,oz_fiyat,urun_id,oz_durum) VALUES 
    ('".@$_POST['oz1']."','".@$_POST['oz_fiyat']."','".@$_POST['urun_id']."','".@$_POST['oz_durum']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:urunler.php?durum=ok");
 }
 else {
  header("Location:urunler.php?durum=no");
 }
}

if (isset($_POST['varkaydett'])) {
 $varekle=mysqli_query(@$con, "INSERT INTO urunvaryasyon (oz1,oz_fiyat,urun_id,oz_durum) VALUES 
    ('".@$_POST['oz1']."','".@$_POST['oz_fiyat']."','".@$_POST['urun_id']."','".@$_POST['oz_durum']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:var-ekle.php?urun_id=".$_POST['urun_id']);
 }
 else {
  header("Location:urunler.php?durum=no");
 }
}

if (isset($_POST['varduzenle'])) {
    $urun_id=$_POST['urun_id'];
    $varduzenle=mysqli_query(@$con,"UPDATE urunvaryasyon set 
        oz1='".@$_POST['oz1']."' ,  
        oz_fiyat='".@$_POST['oz_fiyat']."' ,   
        oz_durum='".@$_POST['oz_durum']."'
        where urun_id='$urun_id'");
if(mysqli_affected_rows($con))
{header("Location:urunler.php?duzenle=ok&urun_id=urun_id");}
else 
{header("Location:urunler.php?duzenle=no&urun_id=$urun_id");}
}

?>	

