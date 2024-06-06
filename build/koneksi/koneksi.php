<?php
$koneksi = mysqli_connect("localhost","root","","antrian");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>