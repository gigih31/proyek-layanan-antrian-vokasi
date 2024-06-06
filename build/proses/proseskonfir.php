<?php
    include('../koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $eml = $_POST['email'];
        $nim = $_POST['nim'];
        $email = mysqli_real_escape_string($koneksi, $eml);
       
        
        // Cek username dan password di tabel pengguna
        $sql="SELECT `nim`, 'user' as `level` FROM `pengguna` WHERE `email`='$email' AND `nim`='$nim'";
        
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);

        if(empty($eml)){
            header("Location:LupaKatasandi.php?gagal=emailKosong");
        } else if(empty($nim)){
            header("Location:LupaKatasandi.php?gagal=noindukKosong");
        } else if($jumlah > 0){ // Jika ada di tabel 'pengguna'
            session_start();
            // Get data
            $data = mysqli_fetch_row($query);
            $nim = $data[0];
            $level = $data[1];
            $_SESSION['nim'] = $nim;
            $_SESSION['level'] = $level;
            header("Location:../ResetKatasandi.php");
        } else {
            // Jika tidak ada di tabel 'pengguna', cek di tabel 'admin'
            $sql_admin = "SELECT `nip`, `level` FROM `admin` WHERE `email`='$email' AND `nip`='$nim'";
            $query_admin = mysqli_query($koneksi, $sql_admin);
            $jumlah_admin = mysqli_num_rows($query_admin);
            
            if($jumlah_admin > 0){ // Jika ada di tabel 'admin'
                session_start();
                // Get data
                $data_admin = mysqli_fetch_row($query_admin);
                $nip = $data_admin[0];
                $level_admin = $data_admin[1];
                $_SESSION['nip'] = $nip;
                $_SESSION['level'] = $level_admin;
                
                if($level_admin === 'admin') {
                    header("Location:../ResetKatasandi.php");
                } else if($level_admin === 'superadmin') {
                    header("Location:../ResetKatasandi.php");
                } else {
                    
                }
            } else {
                header("Location:../ResetKatasandi.php?gagal=email/noinduksalah");
            }
        }
    }
?>
