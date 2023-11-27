   
 <?php
include ('../connect.php');
?>   
   <?php
     $errormessage = "";
     if (isset($_GET['idteam'])) {
    $idteam = $_GET['idteam'];
    
    $sql = "DELETE FROM team WHERE idteam =$idteam";
    $sth = $conn->prepare($sql);
    $sth->execute();
    if($sth){
        header("location:./team.php");
    }
    else{
        echo "Error deleting team.";
    }

    }
    ?>