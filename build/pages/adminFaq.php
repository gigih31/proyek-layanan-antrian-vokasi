<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    
    <title>FAQ</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal bg leading-default bg-blue-50 text-slate-500">
    <div class="absolute w-full min-h-75"></div>
    <!-- sidenav  -->
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl  max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times  text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap  text-slate-700" href="#">
                <img src="../assets/img/LogoV.png"
                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-12"
                    alt="main_logo" />
                <img src="../assets/img/LogoV.png"
                    class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-12"
                    alt="main_logo" />
                <span class="ml-1 text-[16px] font-semibold transition-all duration-200 ease-nav-brand">Layanan
                    Vokasi</span>
            </a>
        </div>
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent " />
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap  px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="../pages/adminDashboard.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap  px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="./adminDataMahasiswa.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Antrian</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg"
                        href="../pages/adminKritik.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Kritik & Saran</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="./adminUpload.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Upload SOP</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 font-semibold rounded-lg text-slate-700 transition-colors bg-blue-500/13"
                        href="./adminFaq.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">FAQ</span>
                    </a>
                </li>

                <li class="absolute bottom-2 mt-0.5 w-full bg-white">
                    <a class="py-2.7 text-sm ease-nav-brand my-0  flex items-center whitespace-nowrap transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="../index.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 font-bold duration-300 opacity-100 pointer-events-none ease">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>

                            Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-black opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']"
                            aria-current="page">FAQ</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-black capitalize">FAQ</h6>
                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                            <span
                                class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                </div>
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->
        <!-- content -->

        <div class="w-full px-6 py-6">
            <div class="flex justify-end px-4">
                <button
                    class="bg-[#263959] hover:bg-[#EBA92E] px-3 text-sm lg:text-[16px] text-white rounded-md h-8 lg:h-9 font-semibold "
                    data-modal-target="#myModal1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 lg:w-6 lg:h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah
                </button>
            </div>
                <!-- Modal Containers -->
                <div id="myModal1"
                    class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-8 xl:p-10">
                    <!-- Modal Content -->
                    <div class="bg-white w-full h-1/2 md:w-3/4 p-5 rounded overflow-auto">
                        <div class="flex justify-end">
                            <!-- Close Button -->
                            <button class="text-gray-600 hover:text-gray-800" data-modal-close="#myModal1">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <form action="../proses/prosesaddfaq.php" method="POST">
                        <div>
                            <h1 class="text-2xl font-bold mb-4">Tambah FAQ</h1>
                            <div class="">
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Pertanyaan</p>
                                    <input type="text" name="pertayaan" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Jawaban</p>
                                    <input type="text" name="jawaban" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>                                
                            </div>
                            <div class="flex justify-end px-2 xl:px-7">
                                <button type="submit"
                                    class="bg-[#263959] hover:bg-[#EBA92E] px-5 text-white rounded-lg h-9 font-semibold ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white font-bold">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    Tambahkan
                                </button>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
                <!-- modals end -->
            </div>
        </div>

        <div class="overflow-x-auto mx-10 bg-white rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg">
                <thead class="text-xs text-white uppercase bg-[#EBA92E] rounded-t-lg">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawaban
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            aksi
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
          $sql = "SELECT * FROM faq ";
 
          
 
          $result = mysqli_query($conn, $sql);
          
          $row_color = 0; // Inisialisasi variabel untuk menentukan warna baris

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $row_class = $row_color % 2 == 0 ? 'bg-white' : 'bg-[#F7F6FE]';
                ?>
                <tbody>
                    <tr class="<?= $row_class ?> border-b mr-6">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-black whitespace-nowrap  truncate max-w-[100px]">
                            <?= $row["pertanyaan"] ?>
                        </th>
                        <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                        <?= $row["jawaban"] ?>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center">
                                    <a  class="mr-2"  href="adminEditfaq.php?id=<?= $row["id_faq"] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                    <a class="mr-2"   href="../proses/prosesdeletefaq.php?id=<?= $row["id_faq"] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
        
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
                <?php
            $row_color++;}
        } else {
            echo "0 results";
        }
        ?>
               
       
        
            </table>
        </div>        
        
        
            <!-- Modal Edit Containers -->
            <div id="myModal2"
                class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-8 xl:p-10">
                <!-- Modal Content -->
                <div class="bg-white w-full h-1/2 md:w-3/4 p-5 rounded overflow-auto">
                    <div class="flex justify-end">
                        <!-- Close Button -->
                        <button class="text-gray-600 hover:text-gray-800" data-modal-close="#myModal2">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <form action="../proses/proseseditfaq.php" method="POST">
                    <div>
                        <h1 class="text-2xl font-bold mb-4">Ubah FAQ</h1>
                        <div class="">
                            <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                <p class="font-semibold mr-4 mb-2 xl:text-xl">Pertanyaan</p>
                                <input type="text" name="pertanyaan" value="<?= $row["pertanyaan"] ?>" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                            </div>
                            <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                <p class="font-semibold mr-4 mb-2 xl:text-xl">Jawaban</p>
                                <input type="text" name="jawaban" value="<?= $row["jawaban"] ?>" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                            </div>                                
                        </div>
                        <div class="flex justify-end px-2 xl:px-7">
                            <button type="submit"
                                class="bg-[#263959] hover:bg-[#EBA92E] px-5 text-white rounded-lg h-9 font-semibold ">                                
                                Ubah
                            </button>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
            
            <!-- modals end -->
           
            <div id="myModal3"
                class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-15 xl:p-28">
                <!-- Modal Content -->
                <div class="bg-white w-full h-auto md:w-3/4 p-5 rounded">
                    <div class="flex justify-end">
                        <!-- Close Button -->
                        <button class="text-gray-600 hover:text-gray-800" data-modal-close="#myModal3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    
                </div>
            </div>
        </div>

        <!-- end content -->
    </main>
</body>
<!-- main script file  -->

<script src="../assets/js/main.js"></script>
<script src="../assets/js/popup.js"></script>
</html>