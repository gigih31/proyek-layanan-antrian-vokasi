<?php
 
   
 $conn = mysqli_connect("localhost", "root", "", "antrian");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)
 $nim =  $_REQUEST['nim'];
 $email =  $_REQUEST['email'];
 $username = $_REQUEST['username'];
 
 $level =  $_REQUEST['level'];
 


 $sql = "UPDATE pengguna SET nim='$nim', username='$username', email='$email',level='level' WHERE nim='$nim'";
  
 if(mysqli_query($conn, $sql)){
    header("Location:../pages/SuperDataUser.php?notif=editberhasil");

 } else{
    header("Location:../pages/SuperDataUser.php?notif=editgagal");
         mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>