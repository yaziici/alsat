<?php 
error_reporting(0);
include "../php/baglan.php";
mysqli_query($con, "SET NAMES UTF8");
session_start();
ob_start();



if (!empty($_FILES)) {

    $uploads_dir = "uploads/urunler";
    @$tmp_name = $_FILES['file']["tmp_name"];
    @$name = $_FILES['file']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizad=$benzersizsayi1;
    $refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $kaydet=mysqli_query(@$con, "INSERT INTO urunfoto (urun_id,urunfoto_resimurl) 
    VALUES ('".@$_POST['urun_id']."','".@$refimgyol."')");
 if (mysqli_affected_rows($con)) {
  header("Location:../ilanver.php?durum=ok");
 }
 else {
  header("Location:../ilanver.php?durum=no");
 }
}
?>	

