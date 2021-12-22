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
if(isset($_POST['logon'])) {

    $uye_kadi=$_POST['uye_kadi'];
    $uye_sifre=md5($_POST['uye_sifre']);

    if($uye_kadi && $uye_sifre){

        $sorgulaa=mysqli_query($con,"SELECT * FROM uyeler WHERE uye_kadi='$uye_kadi' AND uye_sifre='$uye_sifre'");
        $verisayy=mysqli_num_rows($sorgulaa);

        if($verisayy>0){
            $_SESSION['uye_kadi'] = $uye_kadi;
            header('Location:../index.php?giris=yes');
        } else{
            header('Location:../uyegirisi.php?giris=no');
        }
    }
}




if(isset($_POST['ayar_genel'])) {



    $ayar_genel=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_title='".@$_POST['ayar_title']."' ,        
        ayar_footer='".@$_POST['ayar_footer']."'
        where ayar_id='1'");

if(mysqli_affected_rows($con))

{header("Location:ayarlar.php?durum=ok");}
else {header("Location:ayarlar.php?durum=no");}
}
if(isset($_POST['ayar_iletisim'])) {
    $ayar_iletisim=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_tel='".@$_POST['ayar_tel']."' ,
        ayar_adres='".@$_POST['ayar_adres']."' ,
        ayar_mail='".@$_POST['ayar_mail']."' ,
        ayar_fax='".@$_POST['ayar_fax']."' where ayar_id='1'"); 
if(mysqli_affected_rows($con))
{ header("Location:ayarlar.php?durum=ok");}
else { header("Location:ayarlar.php?durum=no");}
}
if(isset($_POST['ayar_google'])) {
    $ayar_google=mysqli_query(@$con,"UPDATE ayarlar set 
        ayar_description='".@$_POST['ayar_description']."' ,
        ayar_keywords='".@$_POST['ayar_keywords']."' 
        where ayar_id='1'");
if(mysqli_affected_rows($con))
{ header("Location:ayarlar.php?durum=ok");}
else { header("Location:ayarlar.php?durum=no");}
}
if (isset($_POST['uyekaydet'])) {


 $uyeekle=mysqli_query(@$con, "INSERT INTO uyeler
    (uye_ad,uye_soyad,uye_kadi,uye_mail,uye_telefon,uye_sifre,uye_cinsiyet,uye_il) VALUES 
   ('".@$_POST['uye_ad']."',
    '".@$_POST['uye_soyad']."',
    '".@$_POST['uye_kadi']."',
    '".@$_POST['uye_mail']."',
    '".@$_POST['uye_telefon']."',
    md5('".@$_POST['uye_sifre']."'),
    '".@$_POST['uye_cinsiyet']."',
    '".@$_POST['uye_il']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:../uyeol.php?durum=ok");
 }
 else {
  header("Location:../uyeol.php?durum=no");
 }
}

if($_GET['uyeonayla']=="ok") {
    $uyeonayla=mysqli_query(@$con,"UPDATE uyeler set 
    uye_onay='1' where uye_id='".$_GET['uye_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:uyelerr.php?onay=ok");}
else { header("Location:uyelerr.php?onay=no");}
}

if($_GET['urunvitrin']=="ok") {
    $urunvitrin=mysqli_query(@$con,"UPDATE urunler set 
    urun_vitrin='1' where urun_id='".$_GET['urun_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:urunler.php?onay=ok");}
else { header("Location:urunler.php?onay=no");}
}

if($_GET['urunvitrin']=="no") {
    $urunvitrin=mysqli_query(@$con,"UPDATE urunler set 
    urun_vitrin='0' where urun_id='".$_GET['urun_id']."'"); 
if(mysqli_affected_rows($con))
{ header("Location:urunler.php?onay=ok");}
else { header("Location:urunler.php?onay=no");}
}

if ($_GET['uyesil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from uyeler where uye_id='".$_GET['uye_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:onaysizuyeler.php?silme=ok");
}
}

if (isset($_POST['uyeduzenle'])) {

    $uye_id=$_POST['uye_id'];

    $menuduzenle=mysqli_query(@$con,"UPDATE uyeler set 
        uye_ad='".@$_POST['uye_ad']."' ,  
        uye_soyad='".@$_POST['uye_soyad']."' ,      
        uye_kadi='".@$_POST['uye_kadi']."' , 
        uye_mail='".@$_POST['uye_mail']."' , 
        uye_telefon='".@$_POST['uye_telefon']."' , 
        uye_cinsiyet='".@$_POST['uye_cinsiyet']."'
        where uye_id='$uye_id'");

if(mysqli_affected_rows($con))

{header("Location:uyelerr.php?duzenle=ok&uye_id=$uye_id");}
else {header("Location:uyelerr.php?duzenle=no&uye_id=$uye_id");}
}

if (isset($_POST['urunkaydet'])) {

    $uploads_dir = "uploads/urunler";
    @$tmp_name = $_FILES['urungorsel']["tmp_name"];
    @$name = $_FILES['urungorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $urunekle=mysqli_query(@$con, "INSERT INTO urunler
    (urun_ad,urun_aciklama,urun_fiyat,urun_model,urun_ustid,urun_kimden,urun_durum,urun_garanti,urun_renk,urun_il,urun_kulid,urun_foto) VALUES 
   ('".@$_POST['urun_ad']."',
    '".@$_POST['urun_aciklama']."',
    '".@$_POST['urun_fiyat']."',
    '".@$_POST['urun_model']."',
    '".@$_POST['urun_ustid']."',
    '".@$_POST['urun_kimden']."',
    '".@$_POST['urun_durum']."',
    '".@$_POST['urun_garanti']."',
    '".@$_POST['urun_renk']."',
    '".@$_POST['urun_il']."',
    '".@$_POST['urun_kulid']."',
    '".@$refimgyol."')");
 if (mysqli_affected_rows($con)) {
  header("Location:../ilanlarim.php?ilan=ok");
 }
 else {
  header("Location:../ilanlarim.php?ilan=no");
 }
}

if (isset($_POST['urunduzenle'])) {
    $urun_id=$_POST['urun_id'];

    $uploads_dir = "uploads/urunler";
    @$tmp_name = $_FILES['urungorsel']["tmp_name"];
    @$name = $_FILES['urungorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $urunduzenle=mysqli_query(@$con,"UPDATE urunler set 
        urun_ad='".@$_POST['urun_ad']."' ,  
        urun_aciklama='".@$_POST['urun_aciklama']."' , 
        urun_fiyat='".@$_POST['urun_fiyat']."' , 
        urun_model='".@$_POST['urun_model']."' , 
        urun_ustid='".@$_POST['urun_ustid']."' , 
        urun_kimden='".@$_POST['urun_kimden']."' , 
        urun_durum='".@$_POST['urun_durum']."' , 
        urun_garanti='".@$_POST['urun_garanti']."' , 
        urun_renk='".@$_POST['urun_renk']."' , 
        urun_il='".@$_POST['urun_il']."' , 
        urun_kulid='".@$_POST['urun_kulid']."'
        where urun_id='$urun_id'");
if(mysqli_affected_rows($con))
{header("Location:../ilanlarim.php?duzenle=ok&urun_id=$urun_id");}
else 
{header("Location:../ilanlarim.php?duzenle=no&urun_id=$urun_id");}
}

if ($_GET['urunnsil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from urunler where urun_id='".$_GET['urun_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:../ilanlarim.php?silme=ok");
}
}

if ($_GET['urunsil']=="ok") {
    $uyesil=mysqli_query($con, "DELETE from urunler where urun_id='".$_GET['urun_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:urunler.php?silme=ok");
}
}

if ($_GET['fotosil']=="ok") {
    $urunfotosil=mysqli_query($con, "DELETE from urunfoto where urunfoto_id='".$_GET['urunfoto_id']."'");

if(mysqli_affected_rows($con)){

$resim_sil=$_GET['urunfotosil'];
    unlink("$resim_sil");
    header("Location:../gorselekle.php?silme=ok&urun_id=".$_GET['urun_id']."");
}
}

if (isset($_POST['vitringorseldegis'])) {

    $urun_id=$_POST['urun_id'];
    $uploads_dir = "uploads/urunler";
    @$tmp_name = $_FILES['vitringorsel']["tmp_name"];
    @$name = $_FILES['vitringorsel']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

$vitrinresimduzenle=mysqli_query(@$con,"UPDATE urunler set     
        urun_foto='".@$refimgyol."' 
        where urun_id='$urun_id'");
 if (mysqli_affected_rows($con)) {
  header("Location:../vitrinresmi.php?vitrin=ok&urun_id=".$_POST['urun_id']."");
 }
 else {
  header("Location:../vitrinresmi.php?vitrin=no&urun_id=".$_POST['urun_id']."");
 }
}

if (isset($_POST['kategoriduzenle'])) {
    $kategori_id=$_POST['kategori_id'];
    $kategoriduzenle=mysqli_query(@$con,"UPDATE kategori set 
        kategori_ad='".@$_POST['kategori_ad']."' ,   
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

if (isset($_POST['kategorikaydet'])) {


 $kategorikaydet=mysqli_query(@$con, "INSERT INTO kategori
    (kategori_ad,kategori_sira) VALUES 
   ('".@$_POST['kategori_ad']."',
    '".@$_POST['kategori_sira']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:kategoriler.php?durum=ok");
 }
 else {
  header("Location:kategoriler.php?durum=no");
 }
}

if (isset($_POST['altkategoriduzenle'])) {
    $altkat_id=$_POST['altkat_id'];
    $kategoriduzenle=mysqli_query(@$con,"UPDATE altkategori set 
        altkat_ustid='".@$_POST['altkat_ustid']."' ,   
        altkat_ad='".@$_POST['altkat_ad']."'
        where altkat_id='$altkat_id'");
if(mysqli_affected_rows($con))
{header("Location:altkategori.php?duzenle=ok&altkat_id=$altkat_id");}
else 
{header("Location:altkategori.php?duzenle=no&altkat_id=$altkat_id");}
}

if ($_GET['altkatsil']=="ok") {
    echo $_GET['altkategoriresimsil'];
    $altkategorisil=mysqli_query($con, "DELETE from altkategori where altkat_id='".$_GET['altkat_id']."'");
if(mysqli_affected_rows($con)){
    header("Location:altkategori.php?silme=ok");}
}

if (isset($_POST['altkatkaydet'])) {


 $kategorikaydet=mysqli_query(@$con, "INSERT INTO altkategori
    (altkat_ad,altkat_ustid) VALUES 
   ('".@$_POST['altkat_ad']."',
    '".@$_POST['altkat_ustid']."')");
 if (mysqli_affected_rows($con)) {
  header("Location:altkategori.php?durum=ok");
 }
 else {
  header("Location:altkategori.php?durum=no");
 }
}

?>	

