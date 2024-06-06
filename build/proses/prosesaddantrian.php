    <?php
    session_start();
    $nim = $_SESSION['nim'];
        include('../koneksi/koneksi.php');

        $id_jadwal = $_POST['id_jadwal'];
        $tanggal = $_POST['tanggal'];
        $id_jenis = $_POST['id_jenis'];
        $id_layanan = $_POST['id_layanan'];
        $no_antrian = $_POST['no_antrian'];
        
        
        // Validasi jika kolom kosong
        if(empty($id_jadwal)){
            header("Location:../pages/userPilihTanggal.php?gagal=jadwalkosong");
            exit ;// tambahkan exit setelah redirect
        } else if(empty($tanggal)){
            header("Location:../pages/userPilihTanggal.php?gagal=tanggalkosong");
            exit ; // tambahkan exit setelah redirect
        }
        else if(empty($id_jenis)){
            header("Location:../pages/userPilihTanggal.php?gagal=jeniskosong");
            exit ;}

        else if(empty($id_layanan)){
            header("Location:../pages/userPilihTanggal.php?gagal=layananKosong");
            exit ;// tambahkan exit setelah redirect
        }
        else if(empty($no_antrian)){
            header("Location:../pages/userPilihTanggal.php?gagal=noKosong");
            exit ;// tambahkan exit setelah redirect
        }
    

        // Hash password (Disarankan untuk menggunakan fungsi hash yang lebih aman daripada MD5)
    // Gunakan metode enkripsi yang lebih aman seperti bcrypt atau SHA-256

        // Masukkan data ke database
        $sql = "INSERT INTO `antrian` (`id`,`id_pengguna`, `layanan`, `id_jenis`,`no_antrian`, `id_jadwal`, `tanggal`) VALUES ('','$nim', '$id_layanan', '$id_jenis', '$no_antrian', '$id_jadwal', '$tanggal')";
        $query = mysqli_query($koneksi, $sql);

        if($query){
            header("Location:../pages/userNomorAntrian.php?notif=berhasil&id_jadwal=$id_jadwal&tanggal=$tanggal&id_jenis=$id_jenis&no_antrian=$no_antrian&id_layanan=$id_layanan");
            exit; // tambahkan exit setelah redirect
        } else {
            header("Location:../pages/userPilihTanggal.php?notif=gagal");
            exit; // tambahkan exit setelah redirect
        }
    ?>
