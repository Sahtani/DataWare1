<?php
include ('connect.php');
?>
<?php
$errormessage="";
function validateEmail($email) {
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email);
}
function validatePassword($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
    return preg_match($pattern, $password);
}
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

     $emailValid = validateEmail($email);
     $passwordValid = validatePassword($password);

    if ($emailValid && $passwordValid) {
        $sql="select * from users where email=:email and password=:password";
        $sth =  $conn->prepare($sql);
        $sth->execute(['email'=>$email, 'password'=>$password]);
         $data=$sth->fetchAll();
         if (count($data)>0) {
            $_SESSION['data'] = $data;
            $_SESSION['autoriser']=true;
            
        }else { $errormessage="this account does not exist.";
        }
        

        if(isset( $_SESSION['data'][0]['rol'])&& $_SESSION['data'][0]['rol']==1) {
            header('location:./ProductOwner/projet.php');
        }else if(isset( $_SESSION['data'][0]['rol'])&& $_SESSION['data'][0]['rol']==2){
             header('location:./ScrumMaster/projet.php');
        }else if(isset( $_SESSION['data'][0]['rol'])&& $_SESSION['data'][0]['rol']==3){
             header('location:./Membre/projectliste.php');
        }else {
            header('location:index.php');
        }
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
    <title>Log In</title>
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

    <div class="border-2 border-dark bg-white flex flex-col items-center   md:w-1/4 md:m-auto mx-4 mt-12 rounded-lg">
        <img src="image/profile.svg" alt="face.jpg" class="w-40 h-40 rounded-full mt-3" />
        <form action="" method="post" class="flex flex-col mt-5 w-full   ">
 <div class="mx-4">
            <label class="text-dark" for="username">Email:</label>
           
            <input class="border border-dark  w-full  rounded-full px-2 py-2" type="email" id="username" name="email" required
                class="">
</div>  
<div class="mx-4">
            <label class="text-dark" for="password">Password:</label>
          
            <input class="border border-dark  w-full  rounded-full md:px-2 py-2" type="password" id="password"
                name="password" required>
                </div>

            <p class=" mt-3 text-center ">Already a member?<a class="font-bold" href="signup.php"> Sign up</a></p>
<div class="mx-4">

            <button class="px-4 py-3 w-full text-white rounded-full bg-dark mt-5 mb-5" name="submit" type="submit">Login</button>
</div>
        </form>
         <p class="text-red-500 text-center mb-4"> <?php echo $errormessage;?></p>
    </div>
</body>

</html>