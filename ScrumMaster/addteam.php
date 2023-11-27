<?php
include ('../connect.php');
?>



<?php

$errormessage="";
if (isset($_POST['submit'])) {
      $name = $_POST["name"];
     $datecreation = $_POST["datecreation"];
  
    $sql="insert into team (name,datecreation) values(:name,:datecreation)";
        $sth =  $conn->prepare($sql);
        $sth->execute(['name'=>$name, 'datecreation'=>$datecreation]);
if ($sth){
    $errormessage="team Added Successfully!";
}else {
        $errormessage="error.";
        
    } 

}

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

<body class="md:overflow-y-hidden">
    <div class="flex gap-4 mr-4">
        <div class="h-screen w-1/6 bg-white border-r shadow-md md:bg-dark">
            <ul class="space-y-4 text-lg sidebar bg-dark text-white mt-5">
                <div class="flex items-center justify-center">
                    <img src="../image/testlogo.png" alt="logo.png" class="w-full">
                </div>
                <li>
                    <a href="../index.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Home</a>
                </li>
                <li>
                    <a href="./projet.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-2xl">Projects</a>
                </li>
                <li>
                    <a href="./team.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Teams</a>
                </li>
                <li>
                    <a href="./member.php" class="block py-2 px-4 hover:bg-btn hover:text-dark text-xl">Members</a>
                </li>
            </ul>
        </div>

        <div class="border-2 border-dark bg-blueText2 md:m-auto md:w-1/2 grid grid-cols-1 md:grid mx-2 md:grid-cols-2 md:gap-10 rounded-lg mt-12">
            <img  class=" md:m-auto md:ml-4" src="../image/undraw_engineering_team_a7n2.svg" alt="signup" >
         <div class="flex flex-col items-center   md:w-full mt-10  ">
         <h1 class="text-2xl font-bold  text-center mt-3">Add team</h1>
            <form action="" method="post" class="flex flex-col mt-4 gap-4 w-full">   
                <div class="mx-2">
                     <input class="border-2 border-dark px-2 py-2   w-full  " type="text" id="name" name="name" required placeholder="team name">
                </div>           
               <div class="mx-2">
                <input class="border-2 border-dark w-full px-2 py-2  " type="date" id="datecreatione" name="datecreation" required >
    </div>        
  
             <div class="mx-2">   
                <button class="px-4 py-3 text-white w-full  bg-dark mb-5" name="submit" type="submit">Add</button>
    </div>
            </form>
           <p class="text-red-500 text-center mb-2"> <?php echo $errormessage;?></p>
        </div>
    </div>
       


    </body>

</html>