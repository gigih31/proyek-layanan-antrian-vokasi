<?php
 include('../koneksi/koneksi.php');
 session_start();
$nim = $_SESSION['nim'];
 $password = $_POST['password'];
 $repeatpassword = $_POST['repeatpassword'];

 if(empty($password)){
    header("Location:../ResetKatasandi.php?gagal=sandikosong");
     exit ;// tambahkan exit setelah redirect
} else if(empty($password)){
    header("Location:ResetKatasandi.php?gagal=passKosong");
    exit ; // tambahkan exit setelah redirect
}

$md5password = md5($password);

$sql ="UPDATE `pengguna` SET `password` = '$md5password' WHERE `nim` = '$nim'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:../index.php?berhasil");
        exit; // tambahkan exit setelah redirect
    } else {
        header("Location:../ResetKatasandi.php?gagal");
        exit; // tambahkan exit setelah redirect
    }
?>