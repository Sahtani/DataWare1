<?php
include ('../connect.php');
if(!isset($_SESSION['autoriser'])&& $_SESSION['autoriser']!=true) {                                                                         
  header("Location: ../login.php");
  exit();
  

}
?>    
   <?php
    $errormessage = "";
     if (isset($_GET['delete_id'])) {
    $delet_id = $_GET['delete_id'];
    $projectusers="SELECT * FROM users WHERE idproject=$delet_id";
    $stmts = $conn->prepare($projectusers);
    $stmts->execute();
    $data=$stmts->fetchAll();
    // print_r($data);
    foreach ($data as $key) {
    $update = "UPDATE users SET idproject=null  WHERE idproject=$delet_id";
    $query = $conn->prepare($update);
    $query->execute();
    }
    $sql = "DELETE FROM project WHERE idproject =$delet_id";
    $sth = $conn->prepare($sql);
    $sth->execute();
    if($sth){
        header("location:./projet.php");
    }
    else{
        echo "Error deleting project.";
    }

    }
    ?>