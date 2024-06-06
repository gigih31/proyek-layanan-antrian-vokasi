<?php
    include('../koneksi/koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nip = $_POST['nip'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    // Validasi jika kolom kosong
    if(empty($username)){
        header("Location:../pages/superDataAdmin.php?gagal=userKosong");
         exit ;// tambahkan exit setelah redirect
    } else if(empty($password)){
        header("Location:../pages/superDataAdmin.php?gagal=passKosong");
        exit ; // tambahkan exit setelah redirect
    }
    else if(empty($nip)){
        header("Location:../pages/superDataAdmin.php?gagal=nimKosong");
        exit ;}

    else if(empty($email)){
        header("Location:../pages/superDataAdmin.php?gagal=emailKosong");
        exit ;// tambahkan exit setelah redirect
    }
    else if(empty($level)){
        header("Location:../pages/superDataAdmin.php?gagal=levelKosong");
        exit ;// tambahkan exit setelah redirect
    }

    // Hash password (Disarankan untuk menggunakan fungsi hash yang lebih aman daripada MD5)
    $md5password = md5($password); // Gunakan metode enkripsi yang lebih aman seperti bcrypt atau SHA-256

    // Masukkan data ke database
    $sql = "INSERT INTO `admin` (`username`, `password`, `nip`,`email`, `level`) VALUES ('$username', '$md5password', '$nip', '$email', '$level')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:../pages/superDataAdmin.php?notif=berhasil");
        exit; // tambahkan exit setelah redirect
    } else {
        header("Location:../pages/superDataAdmin.php?notif=gagal");
        exit; // tambahkan exit setelah redirect
    }
?>
