<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Dashboard</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-blue-50 text-slate-500">
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
                    <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap  px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="./superDashboard.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="./superDataAntrian.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Antrian </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  transition-colors hover:bg-blue-500/13 hover:rounded-lg"
                        href="./superDataUser.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data User</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 font-semibold bg-blue-500/13 text-slate-700 transition-colors rounded-lg "
                        href="./superDataAdmin.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Admin</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="./superKritik.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Kritik & Saran</span>
                    </a>
                </li>

                <li class="absolute bottom-2 mt-0.5 w-full bg-white">
                    <a class="py-2.7 text-sm ease-nav-brand my-0  flex items-center whitespace-nowrap transition-colors hover:bg-blue-500/13 hover:rounded-lg "
                        href="../index.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span
                            class="ml-1 flex items-center font-bold duration-300 opacity-100 pointer-events-none ease">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mr-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            Keluar</span>
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
                            aria-current="page">Data Admin</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-black capitalize">Data Admin</h6>
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
        <div class="w-full px-10 py-6 mx-auto">
            <div class="flex bg-white h-14 px-3 items-center justify-between overflow-x-auto overflow-y-clip">
                
                <button
                    class="bg-[#263959] px-3 text-sm lg:text-[16px] text-white rounded-md h-7 lg:h-10 font-semibold hover:bg-[#EBA92E]"
                    data-modal-target="#myModal1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 lg:w-6 lg:h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah
                </button>

                <!-- Modal Containers -->
                <div id="myModal1"
                    class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-8 xl:p-10">
                    <!-- Modal Content -->
                    <div class="bg-white w-full h-full p-5 rounded overflow-auto">
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
                        <form action="../proses/prosesaddadmin.php" method="POST">
                        <div>
                            <h1 class="text-2xl font-bold mb-4">Menambah Akun Admin</h1>
                            <div class="px-0 md:px-7 lg:px-16">
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Nip</p>
                                    <input type="text" name="nip" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-1">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Username</p>
                                    <input type="text" name="username" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-1">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Email</p>
                                    <input type="text" name="email" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-1">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Password</p>
                                    <input type="text" name="password" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-1">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Level</p>
                                    <span class="flex border h-8 w-full md:w-3/4 pl-2 rounded-1">admin</span>
                                     <input type="hidden" name="level" value="admin">
                                </div>
                                <div class="flex justify-center md:justify-end px-2 xl:px-7">
                                    <button
                                        type="submit"
                                        class="bg-[#263959] px-5 text-white rounded-lg h-9 font-semibold hover:bg-[#EBA92E]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-white font-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                        Tambah
                                    </button>
                                </div>
                            </div>

                        </div>
                        </form>
                        
                    </div>
                </div>
                <!-- modals end -->
            </div>
            <!-- table -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left  text-black ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nip
                            </th>
                            <th scope="col" class="px-6 py-3">
                                username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            
                            <th scope="col" class="px-6 py-3 text-center">
                                Level
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "antrian";
           
          $conn = mysqli_connect($servername, $username, $password, $dbname);
           
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          $sql = "SELECT * FROM admin WHERE level = 'admin'";
 
 
 
          $result = mysqli_query($conn, $sql);
           
          $row_color = 0; // Inisialisasi variabel untuk menentukan warna baris

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $row_class = $row_color % 2 == 0 ? 'bg-white' : 'bg-[#F7F6FE]';
                ?>
                        <tr class="<?= $row_class ?> border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?= $row["nip"] ?>
                            </th>
                            <td class="px-6 py-4">
                            <?= $row["username"] ?>
                            </td>
                            <td class="px-6 py-4">
                            <?= $row["email"] ?>
                            </td>
                            
                            <td class="px-6 py-4 flex items-center justify-center">
                                admin
                            </td>
                            <td class="px-6 py-4  items-center justify-center">
                                <div class="flex justify-center">
                                <a href="./SuperAdminEdit.php?nip=<?= $row["nip"] ?>" class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                                <a href="../proses/prosesdeleteadmin.php?nip=<?= $row["nip"] ?>" class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                            </a>
                                </div>
                            
                            </td>
                        </tr>
                        <?php
          $row_color++;  }
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);
        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
<!-- main script file  -->
<script src="../assets/js/main.js"></script>
<script src="../assets/js/popup.js"></script>

</html>