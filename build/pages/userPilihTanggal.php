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
    <nav class="bg-white shadow-dark-blur border-gray-200 ">
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
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
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
                        class="block py-2 px-3  rounded hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0  ">Antrian Saya</a>
                    </li>
                    <li>
                        <a href="../index.php"
                          class="flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#EBA92E] md:p-0 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6" style="transform: scaleX(-1)">
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

    <!-- main -->
    
                <!-- Accordion Item 1 -->
                <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "antrian";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari tabel jadwal
    $id = $_GET['id'];
            $id_jenis = $_GET['jenis'];
        
?>
        <form action="./userPilihJam.php?id=<?php echo $id?>&jenis=<?php echo $id_jenis?>" method="post">
    <main class="max-w-screen-xl mx-auto p-7 py-10">
        <h1 class="text-2xl font-semibold text-center w-full">Pilih Tanggal </h1>
        <div class="flex flex-row flex-wrap my-10 justify-center sm:justify-evenly">
            <div class="flex border justify-center items-center rounded-xl px w-3/4 md:w-[400px] h-14">
                <input type="date" id="datepicker" name="tanggal" required
                    class="flex h-8 w-full pl-2 rounded-2  p-2 border-gray-300 focus:outline-none " />
                    
            </div>
        </div>

    
        
       
        <div class="flex flex-row flex-wrap my-10 justify-center sm:justify-evenly">
        
            <div class="flex flex-col border py-4 justify-center items-center rounded-xl px w-3/4 md:w-[400px] ">
            <button type="submit" class="bg-[#263959] hover:bg-[#EBA92E] text-white text-sm font-semibold py-6 px-6 rounded-1 lg:py-2 lg:px-7">Lanjut</button>    
        </div>
        </div>
        
       
       
    </main>
    </form>
    
   
    <script>
        function toggleAccordion(button) {
            const accordionCollapse = button.parentNode.nextElementSibling;
            accordionCollapse.classList.toggle('hidden');
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

    </html>