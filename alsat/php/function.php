<?php
ob_start();
session_start();

function giriskontrol(){
	$uye_kadi=$_SESSION['uye_kadi'];
	$uyesor=mysqli_query($con,"SELECT * FROM uyeler WHERE uye_kadi='$uye_kadi'");
	$uyesay=mysqli_num_rows($uyesor);
	if($uyesay==0){
		header('Location:index.php');
	}
}

?>