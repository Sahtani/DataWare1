
<?php
include ('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>DataWare Website</title>
     <meta name="title" content="Team and project management for DataWare">
    <meta name="keywords" content="team, project, Members, team management, project management">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
            rel="stylesheet">
   

<!-- js -->
<script src="js/navbar.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            fontFamily: {
                'Saira': ['Saira Condensed', 'sans-serif']
                
            },
            extend: {
                colors: {
                    'dark': '#1e1b4b',
                    'secondary': '#312e81',
                    'blueText': '#1e40af',
                    'primary': '#1d4ed8',
                    'blutextbtn': '#2563eb',
                    'blueText2': '#3b82f6',
                    'background': '#60a5fa',
                    'btn': '#93c5fd',
                },
                
            },
        },
    }
    </script>
    </head>
<body class="bg-white overflow-y-hidden h-screen">
     <header class="">
        <nav class="flex items-center justify-around md:mt-0 mt-4">
            <a href="index.php" class="md:w-1/5 w-1/3"><img src="./image/logo-removebg-preview.png" alt="logo.png"
                    class=""></a>
            <ul class="flex items-center justify-between gap-4 font-Saira text-xl ">
                <il><a href="login.php" class=" text-dark ">Log in</a></il>
                <il><a href="signup.php"
                        class=" border-sky-500 md:px-6 px-2 py-2  rounded-full text-white bg-dark  ">Sign up</a></il>

                <il></il>

            </ul>
        </nav>
    </header>
    <div class="flex flex-col ">
       
        <div class="mt-7 flex flex-col items-center justify-center">
            <h1 class="text-dark text-6xl font-Saira font-bold  " >DataWare</h1>
            <p class="text-dark text-2xl font-Saira  mt-5 md:mx-0 mx-4 text-center md:w-1/2 mb-4">Feel free to let me know if you have any specific questions or if there's anything else you'd like to know Feel free to let me know if you have any specific </p>
        </div>
         <div class="flex items-center justify-center 	">
            <img src="image/e.jpg" alt="homme.png" class="md:w-1/3  "  />

        </div>
    </div>
</body>
</html>