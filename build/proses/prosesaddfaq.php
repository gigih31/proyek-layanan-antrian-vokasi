<?php
    include('../koneksi/koneksi.php');

    $pertanyaan = $_POST['pertayaan'];
    $jawaban = $_POST['jawaban'];
    

    // Validasi jika kolom kosong
    if(empty($pertanyaan)){
        header("Location:../pages/adminFaq.php?gagal=pertanyaankosong");
         exit ;// tambahkan exit setelah redirect
    } else if(empty($jawaban)){
        header("Location:../pages/adminFaq.php?gagal=jawabanosong");
        exit ; // tambahkan exit setelah redirect
    }
    
    

    
    // Masukkan data ke database
    $sql = "INSERT INTO `faq` (`pertanyaan`, `jawaban`) VALUES ('$pertanyaan', '$jawaban')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:../pages/adminFaq.php?berhasil");
        exit; // tambahkan exit setelah redirect
    } else {
        header("Location:../adminFaq.php?gagal");
        exit; // tambahkan exit setelah redirect
    }
?>
