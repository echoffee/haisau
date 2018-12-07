<?php
    require('checkUserConnect.php');
    require 'connect.php';
    session_start();
    
    $idUser = $_GET['idUser'];
    $idProject1 = $_GET['idProject'];
    $idProject2 = $_GET['idProject']; //not redondante because idproject change state after query processing

    $query = "INSERT INTO `Travailler`(`idUtilisateur`, `idProjet`, `status`) VALUES
    ('$idUser','$idProject1','pending')"; 
    //working
     $result = $conn->exec($query) ;
     if ($result == 1) {
       
        header("Location: inviteDev.php?id=".$idProject2.""); 
    }
    else
       echo "An error occured while creating the us";

?>