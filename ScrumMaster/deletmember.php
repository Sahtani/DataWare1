   
 <?php
include ('../connect.php');
?>   
   <?php
     $errormessage = "";
     if (isset($_GET['deletid'])) {
    $delet_id = $_GET['deletid'];
    
    $sql = "DELETE FROM users WHERE iduser =$delet_id";
    $sth = $conn->prepare($sql);
    $sth->execute();
    if($sth){
        header("location:./member.php");
    }
    else{
        echo "Error deleting member.";
    }

    }
    ?>