<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 mt-12">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-44 w-auto " src="./assets/img/LogoV.png" alt="Your Company">
          <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Layanan Antrian Vokasi</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="proses/proseslogin.php" method="POST">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#263959] sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
            <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Kata Sandi</label>
            <div class="text-sm">
              <a href="./LupaKatasandi.php" class="font-semibold text-[#263959] hover:text-[#EBA92E]">Lupa Kata
                Sandi?</a>
            </div>
          </div>
              
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#263959] sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <button type="submit" name="login" value="login" class="flex w-full justify-center rounded-md bg-[#263959] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#EBA92E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>