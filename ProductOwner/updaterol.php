<?php
include ('../connect.php');
?>
<?php
if (isset($_POST['submit'])) {
  $updaterol=$_GET['updaterol'];
    $rol = $_POST["rol"];
    $sql="update users set rol=:rol where iduser=:updaterol";
    $sth =  $conn->prepare($sql);
    $sth->execute(['rol'=> $rol, 'updaterol'=>$updaterol]);
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="title" content="Team and project management for DataWare">
    <meta name="keywords" content="team, project, Members, team management, project management">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inika&family=Inter:wght@100&family=Ruda&display=swap"
      rel="stylesheet"
    />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

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
            <a
              href="../index.php"
              class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl"
              >Home</a
            >
          </li>
          <li>
            <a
              href="./projet.php"
              class="block py-2 px-4 hover:bg-btn hover:text-dark text-2xl"
              >Projects</a
            >
          </li>
          <li>
            <a
              href="./team.php"
              class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl"
              >Teams</a
            >
          </li>
          <li>
            <a
              href="./member.php"
              class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl"
              >Members</a
            >
          </li>
        </ul>
      </div>
      <div class="w-4/5">
        <div class="rounded-lg mt-10 px-4 py-3 mr-4">
          <form>
            <div class="relative">
              <div
                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
              >
                <svg
                  class="w-4 h-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
              </div>
              <input
                type="search"
                id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Member..."
                required
              />
              <button
                type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Search
              </button>
            </div>
    
        </div>
    </form>
        <form method="post" action="">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option  disabled selected>Choose a rol</option>
            <option value="2">Scrum Master</option>

            </select>
           <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update rol</button>
        </form> 
        

      </div>
    </div>



  
  </body>
</html>
