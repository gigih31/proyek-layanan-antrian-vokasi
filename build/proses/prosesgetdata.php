<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "antrian";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
    // Ambil data dari tabel antrian
    $sql_antrian = "SELECT id_jadwal FROM antrian";
    $result_antrian = $conn->query($sql_antrian);
    
    $antrian = array();
    if ($result_antrian->num_rows > 0) {
        while($row = $result_antrian->fetch_assoc()) {
            array_push($antrian, $row["id_jadwal"]);
        }
    }
    
    // Ambil data dari tabel jadwal
    $sql_jadwal = "SELECT start_time FROM jadwal";
    $result_jadwal = $conn->query($sql_jadwal);
    
    $jadwal = array();
    if ($result_jadwal->num_rows > 0) {
        while($row = $result_jadwal->fetch_assoc()) {
            array_push($jadwal, $row["start_time"]);
        }
    }
    
    // Kirim data sebagai JSON
    header('Content-Type: application/json');
    echo json_encode(array("antrian" => $antrian, "jadwal" => $jadwal));
    
    // Tutup koneksi
    $conn->close();
    ?>