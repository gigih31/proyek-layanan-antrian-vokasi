<?php
 
   
        $conn = mysqli_connect("localhost", "root", "", "antrian");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
        $nip =  $_GET['nip'];
       
         
 
        $sql = "DELETE FROM admin WHERE nip='$nip'";  
       
        if(mysqli_query($conn, $sql)){
            header("Location:../pages/SuperDataAdmin.php?notif=deleteberhasil");
        } else{
            header("Location:../pages/SuperDataAdmin.php?notifdeletegagal");
        }
         
        // Close connection
        mysqli_close($conn);
        ?>