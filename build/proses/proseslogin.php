<?php
    include('../koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $eml = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $eml);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        // Cek username dan password di tabel pengguna
        $sql="SELECT `nim`, 'user' as `level` FROM `pengguna` WHERE `email`='$email' AND `password`='$password'";
        
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);

        if(empty($eml)){
            header("Location:index.php?gagal=userKosong");
        } else if(empty($pass)){
            header("Location:index.php?gagal=passKosong");
        } else if($jumlah > 0){ // Jika ada di tabel 'pengguna'
            session_start();
            // Get data
            $data = mysqli_fetch_row($query);
            $nim = $data[0];
            $level = $data[1];
            $_SESSION['nim'] = $nim;
            $_SESSION['level'] = $level;
            header("Location:../pages/userBeranda.php");
        } else {
            // Jika tidak ada di tabel 'pengguna', cek di tabel 'admin'
            $sql_admin = "SELECT `nip`, `level` FROM `admin` WHERE `email`='$email' AND `password`='$password'";
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
                    header("Location:../pages/adminDashboard.php");
                } else if($level_admin === 'superadmin') {
                    header("Location:../pages/superDashboard.php");
                } else {
                    
                }
            } else {
                header("Location:../index.php?gagal=userpassSalah");
            }
        }
    }
?>
