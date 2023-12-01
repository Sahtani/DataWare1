<?php
        include('../connect.php');
        session_start();
        if($_SESSION['autoriser'] != "oui"){
        header("Location: ../login.php");
        exit();
        

        }

        $errormessage = "";

        if (isset($_GET['iduser'])) {
            $iduser = $_GET['iduser'];
            $sql = "UPDATE users SET idteam =null WHERE iduser = :iduser";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':iduser' => $iduser]);

            if ($stmt->rowCount() > 0) {
                header("Location: member.php");
                exit(); 
            } else {
                $errormessage = "Error updating member.";
            }
        }

?>
