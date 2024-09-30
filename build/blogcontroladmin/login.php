<?php
session_start();
if(isset($_SESSION['authenticated'])){
  $_SESSION['status'] = "You Are Already Login.!";
  header( "Location: ./index.php");
  exit(0);
}
$web_title = "Login Page";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $web_title ?></title>
    <link rel="stylesheet" href="../assets/css/output.css">
</head>
<body class="h-screen loginbg">
    <div class="flex min-h-full md:flex-row lg:flex-row flex-col items-center justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 md:h-20 xl:h-30 w-auto" src="../assets/img/logo.png" alt="Your Company">
          <h2 class="mt-10 text-center text-5xl text-indigo-900  primaryfont font-bold leading-[50PX] tracking-tight">Bloging System Control</h2>
          <?php 
              if(isset($_SESSION['status'])){
                  ?>
                  <h4 class="mt-10 text-center text-1xl primaryfont leading-9 tracking-tight" ><?=$_SESSION['status']?></h4>
                  <?php
                  unset(
                  $_SESSION['status']
                  );
              }
              ?>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white p-9">
          <form class="space-y-6" action="./logincode.php" method="POST">
            <div>
              <label for="email" class="block text-sm primaryfont leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="text" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:text-gray-700 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm primaryfont leading-6 text-gray-900">Password</label>
                <div class="text-sm">
                  <a href="#" class="font-semibold primary-color">Forgot password?</a>
                </div>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:text-gray-700  sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <button name="login-btn"  type="submit" class="flex w-full justify-center rounded-md primary-bg px-3 py-1.5 text-sm primaryfont font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:text-gray-700 ">Sign in</button>
            </div>
          </form>      
        </div>
      </div>
      
</body>
</html>