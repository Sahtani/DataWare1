<?php
include ('../connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
        rel="stylesheet" />

    <!-- js -->
    <script src="js/navbar.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    Saira: ["Saira Condensed", "sans-serif"],
                },
                extend: {
                    colors: {
                        dark: "#1e1b4b",
                        secondary: "#312e81",
                        blueText: "#1e40af",
                        primary: "#1d4ed8",
                        blutextbtn: "#2563eb",
                        blueText2: "#3b82f6",
                        background: "#60a5fa",
                        btn: "#93c5fd",
                        deleted: "#FF6D4D",
                        hoverd: "#FF4F4D",
                    },
                },
            },
        };
    </script>
</head>

<body class="overflow-y-hidden">
    <div class="flex gap-4 mr-4">
        <div class="h-screen w-1/6 bg-white border-r shadow-md md:bg-dark">
            <ul class="space-y-4 text-lg sidebar bg-dark text-white mt-5">
                <div class="flex items-center justify-center">
                      <img src="../image/testlogo.png" alt="logo.png" class="w-full">
                </div>
              
                <li>
                    <a href="index.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Home</a>
                </li>
                <li>
                    <a href="./projet.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-2xl">Projects</a>
                </li>
                <li>
                    <a href="./teams.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Teams</a>
                </li>
                <li>
                    <a href="./member.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Members</a>
                </li>
            </ul>
        </div>
        <div class="w-4/5">
            <div class="rounded-lg mt-10 px-4 py-3 mr-4 ">
                <form>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search team..." required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </div>
            <!-- cards -->
            <div class="grid grid-cols-3 grid-rows-2 gap-4 mt-7">
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white col-start-1 col-end-1">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-dark">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white col-start-2 col-end-2">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-dark">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white col-start-3 col-end-3">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-dark">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:dark">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
                <div class="mt-2 p-6 border rounded-lg shadow dark:bg-white col-start-3 col-end-3 ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-dark">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-dark">
                        Here are the biggest enterprise technology acquisitions of 2021 so
                        far, in reverse chronological order.
                    </p>
                    <div class="flex items-center justify-center gap-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>