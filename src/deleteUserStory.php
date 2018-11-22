<?php
    require 'connect.php';
    session_start();
    $idUs = $_GET['id'];
    $idproject = $_SESSION["idProject"];
    //echo $idUs;
    $query = "DELETE FROM `UserStory` WHERE idUserStory = $idUs;";
     //working
    $result = $conn->exec($query);
    echo $result;
    if ($result == true) {
        echo "Us  updates successfully.";
        header("Location: userStoryList.php?id=".$idproject.""); 
    }
    else
        echo "An error occured while updating the us";
?>