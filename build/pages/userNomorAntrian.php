<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$nim = $_SESSION['nim'];
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "antrian";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    
 ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <title>Layanan Vokasi</title>

</head>

<body class="">
  <nav class="bg-white shadow-dark-blur border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="./UserBeranda.php" class="flex items-center space-x-3 ">
        <img src="../assets/img/LogoV.png" class="h-12" alt="Vokasi Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap 
          ">Layanan Vokasi</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-semibold flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
          <li>
            <a href="./userBeranda.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0  ">Beranda</a>
          </li>
          <li>
            <a href="./userFAQ.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 ">FAQ</a>
          </li>
          <li>
            <a href="./userKritik&Saran.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 ">Kritik
              & Saran</a>
          </li>
          <li>
            <a href="./userAntrianSaya.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0  ">Antrian Saya</a>
          </li>
          <li>
            <a href="../index.php"
              class="flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
              </svg>
              <p class="mb-0 ml-2 font-semibold">Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "antrian";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    $id_jadwal = $_GET['id_jadwal'];
    $tanggal = $_GET['tanggal'];
    $id_jenis = $_GET['id_jenis'];
    $id_layanan = $_GET['id_layanan'];
    $no_antrian = $_GET['no_antrian'];
    // Ambil data dari tabel jadwal
    
$sql = "SELECT username FROM pengguna WHERE nim='$nim'";
$result = mysqli_query($conn, $sql);

if ($result) {
  // Mengambil baris hasil query
  $row = mysqli_fetch_assoc($result);
  
  // Mengecek apakah ada hasil dari query
  if ($row) {
      // Mengambil nilai username dari hasil query
      $nama = $row['username'];
      
  } else {
      echo "Data tidak ditemukan";
  }
} else {
  echo "Error dalam eksekusi query: " . mysqli_error($conn);
}
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sq1 = "SELECT * FROM jadwal WHERE id_jadwal='$id_jadwal'";
$result1 = mysqli_query($conn, $sq1); // Ganti $sql1 menjadi $sq1

if ($result1) {
    if (mysqli_num_rows($result1) > 0) { // Memeriksa apakah ada hasil dari query
        // Mengambil baris hasil query
        $row1 = mysqli_fetch_assoc($result1);

        // Menampilkan data jika hasil query ditemukan
       
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Error dalam eksekusi query: " . mysqli_error($conn);
}
$sql2 = "SELECT * FROM layanan WHERE id_layanan='$id_layanan'";
$result2 = mysqli_query($conn, $sql2);

if ($result2) {
    $row2 = mysqli_fetch_assoc($result2);

    if ($row2) {
        // Gunakan kondisi yang benar untuk mendapatkan kode sesuai dengan nilai $row2
        if ($row2['id_layanan'] == 1) {
            $kode = 'AKDMK';
        } elseif ($row2['id_layanan'] == 2) {
            $kode = 'KMH';
        } elseif ($row2['id_layanan'] == 3) {
            $kode = 'UANG';
        } elseif ($row2['id_layanan'] == 4) {
            $kode = 'UMUM';
        } else {
            $kode = 'Kode Lainnya';
        }
    }
}
?>
  <!-- main -->
  <main class="max-w-screen-xl mx-auto p-7 py-10">
    <div class="flex justify-center items-center max-w-screen-md mx-auto text-center bg-[#263959] h-14 mb-0">
        <h5 class="text-[#EBA92E] mb-0 font-semibold"><?php echo $nama ?></h5>
    </div>
    <div class="flex flex-col justify-center items-center max-w-screen-md mx-auto text-center bg-[#EBA92E] h-auto mb-0">
        <h5 class="text-white mb-0 mt-4">Kode Antrian</h5>
        <h1 class="my-6 text-white"><?php echo $kode ?> <?php echo $no_antrian ?></h1>
        <p class="text-white mx-5"><?php echo $tanggal ?> - <?php echo $row1["start_time"] ?>-<?php echo $row1["end_time"] ?></p>
        <p class="m-0 text-white max-w-120 mx-19 font-bold">Mohon Datang paling lambat 10 menit sebelum waktu antrian</p>
        <div class="bg-[#263959] py-0.5 my-3 px-10 max-w-120 mx-19 rounded-2">
        </div>
        <p class=" text-white max-w-120 mx-19 font-bold">Jika datang melebihi batas waktu yang sudah ditentukan maka antrian akan hangus</p>
        <p class=" text-white  mx-5 ">Jl Veteran No 12 – 14, Ketawanggede, Malang, Jawa Timur, Indonesia</p>
    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>