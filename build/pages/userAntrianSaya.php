<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$nim = $_SESSION['nim'];

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
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 ">Beranda</a>
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
              class="block py-2 px-3 text-[#EBA92E] rounded hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0  ">Antrian Saya</a>
          </li>
          <li>
            <a href="../index.php"
              class="flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 transform -scale-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class=" w-6 h-6" style="transform: scaleX(-1)">
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

  <main class="max-w-screen-xl mx-auto p-5 py-5">
  <div class="w-full px-10 py-6 mx-auto">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-[#EBA92E] rounded-t-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kode Antrian
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nama Layanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Layanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Jam
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "antrian";
           
          $conn = mysqli_connect($servername, $username, $password, $dbname);
           
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          $sql = "SELECT antrian.*, layanan.*, jadwal.*,jenis_layanan.jenis
          FROM antrian 
          INNER JOIN layanan ON antrian.layanan = layanan.id_layanan 
        INNER JOIN jadwal ON antrian.id_jadwal = jadwal.id_jadwal
        INNER JOIN jenis_layanan ON antrian.id_jenis = jenis_layanan.id_jenis_layanan
          WHERE antrian.id_pengguna='$nim'
          ORDER BY antrian.tanggal, jadwal.start_time ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row_color = 0;                     // Inisialisasi variabel untuk menentukan warna baris
        

   
        
        while ($row = mysqli_fetch_assoc($result)) {
            // Logika untuk mengubah warna baris secara bergantian
            $row_class = $row_color % 2 == 0 ? 'bg-white' : 'bg-[#F7F6FE]';
            $id_layanan = $row['id_layanan']; 
            
            // Ganti dengan kolom yang sesuai dari tabel antrian
        // Logika untuk menentukan nilai $kode berdasarkan $id_layanan
        if ($id_layanan == 1) {
            $kode = 'AKDMK';
        } else if ($id_layanan == 2) {
            $kode = 'KMH';
        } else if ($id_layanan == 3) {
            $kode = 'UANG';
        } else if ($id_layanan == 4) {
            $kode = 'UMUM';
        } else {
            $kode = 'Kode Lainnya';
        }
            $nama_layanan = $row['layanan'];
        $start_time = $row['start_time'];
        $jenis_layanan = $row['jenis'];
        $id_jadwal = $row['id_jadwal'];
            ?>
            <tr class="<?= $row_class ?> border-b mr-6">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap truncate max-w-[100px]">
                    <?= $kode ?><?= $id_jadwal ?>
                </th>
                <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                    <?= $nama_layanan ?>
                </td>
                <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                    <?= $jenis_layanan ?>
                </td>
                <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                    <?= $row["tanggal"] ?>
                </td>
                <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                    <?= $start_time  ?>
                </td>
                <td class="px-6 py-4">
                    <div class="flex justify-center">
                        <div class="flex justify-center">
                            <a href="./userNomorAntrian.php?id_jadwal=<?= $row["id_jadwal"] ?>&id_jenis=<?= $row["id_jenis"] ?>&tanggal=<?= $row["tanggal"] ?>&id_layanan=<?= $row["id_layanan"]  ?>&no_antrian=<?= $row["id_jadwal"]  ?>" class="px-5 sm:py-1 bg-[#263959] hover:bg-blue-700 rounded-full text-white text-3">
                                Details
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
            $row_color++; // Tambahkan nilai untuk mengubah warna pada baris berikutnya
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);?>
                </table>
            </div>
        </div>
    </main>
</body>
<!-- main script file  -->
<script src="../assets/js/main.js"></script>

</html>