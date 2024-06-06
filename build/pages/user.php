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
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "antrian";
     
    $conn = mysqli_connect($servername, $username, $password, $dbname);
     
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT id_jadwal FROM antrian";
    $array = ['id_jadwal'];
    



    $result = mysqli_query($conn, $sql);?>
    <!-- main -->
    <main class="max-w-screen-xl mx-auto p-7 py-10">
        <h1 class="text-2xl font-semibold text-center w-full">Pilih Tanggal </h1>
        <div class="flex flex-row flex-wrap my-10 justify-center sm:justify-evenly">
            <div class="flex border justify-center items-center rounded-xl px w-3/4 md:w-[400px] h-14">
                <input type="date" id="datepicker" name="datepicker" required
                    class="flex h-8 w-full pl-2 rounded-2  p-2 border-gray-300 focus:outline-none " />
            </div>
        </div>
        <h1 class="text-2xl font-semibold text-center w-full">Pilih Jam </h1>
        <div class="flex flex-row flex-wrap my-10 justify-center sm:justify-evenly">
            <div class="flex flex-col border py-4 justify-center items-center rounded-xl px w-3/4 md:w-[400px] ">
                <!-- Accordion Item 1 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            08.00 s/d 09.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">
                            <div class="flex w-full mt-13 items-center justify-between">
                                <p class="mb-0 mr-9">08.00 s/d 08.20 WIB</p>
                                <a href="userNomorAntrian.php" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 items-center justify-between">
                                <p class="mb-0 mr-9">08.20 s/d 08.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 items-center justify-between" >
                                <p class="mb-0 mr-9">08.40 s/d 09.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            09.00 s/d 10.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 items-center justify-between">
                                <p class="mb-0 mr-9">09.00 s/d 09.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 items-center justify-between">
                                <p class="mb-0 mr-9">09.20 s/d 09.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 items-center justify-between">
                                <p class="mb-0 mr-9">09.40 s/d 10.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            10.00 s/d 11.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">10.00 s/d 10.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">10.20 s/d 10.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">10.40 s/d 11.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            11.00 s/d 12.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">11.00 s/d 11.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">11.20 s/d 11.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">11.40 s/d 12.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            13.00 s/d 14.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">13.00 s/d 13.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">13.20 s/d 13.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">13.40 s/d 14.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            14.00 s/d 15.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">14.00 s/d 14.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">14.20 s/d 14.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">14.40 s/d 15.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-4 border-b-2 py-2">
                    <h2 class="accordion-header text-lg font-bold mb-3 pr-3">
                        <button class="accordion-button w-full text-start flex justify-between" type="button"
                            onclick="toggleAccordion(this)">
                            15.00 s/d 16.00 WIB
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </h2>
                    <div class="accordion-collapse hidden">
                        <div class="accordion-body">

                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">15.00 s/d 15.20 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">15.20 s/d 15.40 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full mt-13 justify-between">
                                <p class="mb-0 mr-9">15.40 s/d 16.00 WIB</p>
                                <a href="#" class="bg-[#EBA92E] px-3 py-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script>
        function toggleAccordion(button) {
            const accordionCollapse = button.parentNode.nextElementSibling;
            accordionCollapse.classList.toggle('hidden');
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

    </html>