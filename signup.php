<?php
include ('connect.php');
?>
<?php

$errormessage="";
function validateName($fisrtname) {
    $pattern = '/^[A-Za-z ]{3,}+$/';
    return preg_match($pattern, $fisrtname);
}
function validateEmail($email) {
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email);
}
function validatePassword($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
    return preg_match($pattern, $password);
}

if (isset($_POST['submit'])) {
    $firstname = $_POST["firstname"];
     $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];


     $firstnamevalid= validateName($firstname );
     $lastnamevalid= validateName($lastname);
     $emailValid = validateEmail($email);
     $passwordValid = validatePassword($password);

    if ($firstnamevalid &&$lastnamevalid && $emailValid && $passwordValid) {
        $sql="insert into users (firstname,lastname,email,password) values(:firstname,:lastname,:email,:password)";
        $sth =  $conn->prepare($sql);
        $sth->execute(['firstname'=>$firstname, 'lastname'=>$lastname,'email'=>$email, 'password'=>$password]);

        $errormessage="Sign-up successful!";
    } else {
        $errormessage="Invalid input. Please check your information and try again.";
    }

}




?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
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


</head>
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

<body class="bg-blueText2 h-screen">
    <header class="">
        <nav class="flex items-center justify-around md:mt-0 mt-4">
            <a href="index.php" class="md:w-1/5 w-1/3"><img src="./image/logo-removebg-preview.png" alt="logo.png"
                    class=""></a>
            <ul class="flex items-center justify-between gap-4 font-Saira text-xl ">
                <il><a href="login.php" class=" text-white hover:border-b">Log in</a></il>
                <il><a href="signup.php"
                        class=" border-sky-500 md:px-6 px-2 py-2  rounded-full text-white bg-dark  ">Sign up</a></il>

                <il></il>

            </ul>
        </nav>
    </header>

        <div class="border-2 border-dark bg-white md:m-auto md:mt-12 md:w-1/2 grid grid-cols-1 md:grid mx-2 md:grid-cols-2 md:gap-10 rounded-lg mt-12">
            <img  class=" md:m-auto md:ml-4" src="image/undraw_engineering_team_a7n2.svg" alt="signup" >
         <div class="flex flex-col items-center   md:w-full mt-10  ">
         <h1 class="text-2xl font-bold  text-center mt-3">Sign up</h1>
            <form action="" method="post" class="flex flex-col mt-4 gap-4 w-full">   
                <div class="mx-4">
                     <input class="border-2 border-dark px-2 py-2   w-full  " type="text" id="fisrtname" name="firstname" required placeholder="First Name">
                </div>           
               <div class="mx-4">
                <input class="border-2 border-dark w-full px-2 py-2  " type="text" id="lastname" name="lastname" required placeholder="Last Name">
    </div>        
    <div class="mx-4">
                <input class="border-2 border-dark  w-full px-2 py-2" type="email" id="username" name="email" required placeholder="E-mail">   
    </div>
    <div class="mx-4">
                <input class="border-2 border-dark   w-full px-2 py-2" type="password" id="password" name="password" required placeholder="Password">
    </div>
             <div class="mx-4">   
                <button class="px-4 py-3 text-white w-full  bg-dark mb-5" name="submit" type="submit">Add</button>
    </div>
            </form>
           <p class="text-red-500 text-center mb-2"> <?php echo $errormessage;?></p>
        </div>
    </div>
       


    </body>

</html>