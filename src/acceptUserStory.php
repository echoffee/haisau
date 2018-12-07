<?php


session_start();
require 'connect.php';

{
    $idUs = $_GET["id"];
    $idproject = $_GET["idProject"];
    echo $idUs ;
    echo $idproject ;

    $query = "UPDATE UserStory SET type = 'backlog'
    WHERE idUserStory = $idUs;";
     //working
    $result = $conn->exec($query);
    echo $result;
    if ($result !== false) {
        echo "Us  updates successfully.";
        header("Location: userStoryList.php?id=".$idproject.""); 
    }else{
        echo "An error occured while updating the us";
    }
}
?>