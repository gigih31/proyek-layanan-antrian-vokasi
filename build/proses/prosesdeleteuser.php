<?php
 
   
        $conn = mysqli_connect("localhost", "root", "", "antrian");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
        $nim =  $_GET['nim'];
       
         
 
        $sql = "DELETE FROM pengguna WHERE nim='$nim'";  
       
        if(mysqli_query($conn, $sql)){
            header("Location:../pages/SuperDataUser.php?notif=deleteberhasil");
        } else{
            header("Location:../pages/SuperDataUser.php?notifdeletegagal");
        }
         
        // Close connection
        mysqli_close($conn);
        ?>