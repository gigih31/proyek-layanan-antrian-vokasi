<?php
 
   
 $conn = mysqli_connect("localhost", "root", "", "antrian");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)
 $nip =  $_REQUEST['nip'];
 $email =  $_REQUEST['email'];
 $username = $_REQUEST['username'];
 $level =  $_REQUEST['level'];



 $sql = "UPDATE admin SET nip='$nip', username='$username', email='$email',level='$level' WHERE nip='$nip'";
  
 if(mysqli_query($conn, $sql)){
    header("Location:../pages/SuperDataAdmin.php?notif=editberhasil");

 } else{
    header("Location:../pages/SuperDataAdmin.php?notif=editgagal");
         mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>