<?php
    include('../koneksi/koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    // Validasi jika kolom kosong
    if(empty($username)){
        header("Location:../pages/superDataUser.php?gagal=userKosong");
         exit ;// tambahkan exit setelah redirect
    } else if(empty($password)){
        header("Location:../pages/superDataUser.php?gagal=passKosong");
        exit ; // tambahkan exit setelah redirect
    }
    else if(empty($nim)){
        header("Location:../pages/superDataUser.php?gagal=nimKosong");
        exit ;}

    else if(empty($email)){
        header("Location:../pages/superDataUser.php?gagal=emailKosong");
        exit ;// tambahkan exit setelah redirect
    }
    else if(empty($level)){
        header("Location:../pages/superDataUser.php?gagal=levelKosong");
        exit ;// tambahkan exit setelah redirect
    }

    // Hash password (Disarankan untuk menggunakan fungsi hash yang lebih aman daripada MD5)
    $md5password = md5($password); // Gunakan metode enkripsi yang lebih aman seperti bcrypt atau SHA-256

    // Masukkan data ke database
    $sql = "INSERT INTO `pengguna` (`username`, `password`, `nim`,`email`, `level`) VALUES ('$username', '$md5password', '$nim', '$email', '$level')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:../pages/superDataUser.php?notif=berhasil");
        exit; // tambahkan exit setelah redirect
    } else {
        header("Location:../pages/superDataUser.php?notif=gagal");
        exit; // tambahkan exit setelah redirect
    }
?>
