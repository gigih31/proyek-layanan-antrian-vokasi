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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  transition-colors hover:bg-blue-500/13 hover:rounded-lg  "
                        href="./superDataAdmin.php">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Admin</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 font-semibold bg-blue-500/13 text-slate-700 transition-colors rounded-lg"
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
                            aria-current="page">Kritik & Saran</li>
                    </ol>
                    <h6 class="mb-0 font-bold text-black capitalize">Kritik & Saran</h6>
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
        <div class="overflow-x-auto mx-10 mt-10 bg-white rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 rounded-lg">
        <thead class="text-xs text-white uppercase bg-[#EBA92E] rounded-t-lg">
          <tr>
          
            <th scope="col" class="px-6 py-3 rounded-tl-lg">
              Kritik
            </th>
            <th scope="col" class="px-6 py-3">
              Saran
            </th>
            <th scope="col" class="px-6 py-3 mr-19 text-center rounded-tr-lg">
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
          $sql = "SELECT * FROM kritiksaran";
 
 
 
          $result = mysqli_query($conn, $sql);
           
          $row_color = 0; // Inisialisasi variabel untuk menentukan warna baris

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Logika untuk mengubah warna baris secara bergantian
                $row_class = $row_color % 2 == 0 ? 'bg-white' : 'bg-[#F7F6FE]';
                ?>
                <tr class="<?= $row_class ?> border-b mr-6">
                
                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap truncate max-w-[100px]">
                        <?= $row["kritik"] ?>
                    </th>
                    <td class="px-6 py-4 font-medium text-black truncate max-w-[100px]">
                        <?= $row["saran"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <a href="./adminKritikdetail.php?id=<?= $row["id_kritik"] ?>" class="px-5 sm:py-1 bg-[#263959] hover:bg-blue-700 rounded-full text-white text-3">
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

</php>