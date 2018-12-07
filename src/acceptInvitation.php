<?php
    require('checkUserConnect.php');
    require 'connect.php';
    session_start();
    
    $idUser = $_GET['idUser'];
    $idProject = $_GET['idProject'];

    $query = "UPDATE `Travailler` SET `status`= 'Joined' WHERE idUtilisateur = '$idUser' AND idProjet = '$idProject' "; 
    //working
     $result = $conn->exec($query) ;
     if ($result == 1) {
       
        header("Location: showInvitations.php"); 
    }
    else
       echo "An error occured ";

?>