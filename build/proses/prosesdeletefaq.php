<?php
 
   
        $conn = mysqli_connect("localhost", "root", "", "antrian");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
        $id =  $_GET['id'];
       
         
 
        $sql = "DELETE FROM faq WHERE id_faq='$id'";  
       
        if(mysqli_query($conn, $sql)){
            header("Location:../pages/adminFaq.php?notif=deleteberhasil");
        } else{
            header("Location:../pages/adminFaq.php?notifdeletegagal");
        }
         
        // Close connection
        mysqli_close($conn);
        ?>