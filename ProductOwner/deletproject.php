   
 <?php
include ('../connect.php');
?>  
   
   <?php
    $errormessage = "";


     if (isset($_GET['delete_id'])) {
    $delet_id = $_GET['delete_id'];
    
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