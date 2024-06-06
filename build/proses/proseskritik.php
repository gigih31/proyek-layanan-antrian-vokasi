<?php 
include('../koneksi/koneksi.php');
$kritik = $_POST['kritik'];

$saran = $_POST['saran'];
if(empty($kritik and $saran)){
	header("Location:../pages/userKritik&Saran.php?notif=tambahkosong");
}else{
	$sql = "insert into `kritiksaran` (`kritik`,`saran`) 
	values ('$kritik', '$saran')";
	mysqli_query($koneksi,$sql);
	header("Location:../pages/userKritik&Saran.php?notif=tambahberhasil");	
}
?>