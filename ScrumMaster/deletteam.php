
 <?php
        include ('../connect.php');
    if(!isset($_SESSION['autoriser'])&& $_SESSION['autoriser']!=true) {                                                                         
  header("Location: ../login.php");
  exit();
  

}
 ?>   
 <?php
            $errormessage = "";
            if (isset($_GET['idteam'])) {
            $idteam = $_GET['idteam'];
            $teamusers="SELECT * FROM users WHERE idteam=$idteam";
            $stmts = $conn->prepare($teamusers);
            $stmts->execute();
            $data=$stmts->fetchAll();
            // print_r($data);
            foreach ($data as $key) {
            $update = "UPDATE users SET idteam=null  WHERE idteam =$idteam";
            $query = $conn->prepare($update);
            $query->execute();
            }
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