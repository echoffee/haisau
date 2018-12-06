<?php
    require '_strings.php';
    require 'connect.php';

    session_start();
    $idUs = $_GET['id'];
    $idproject = $_SESSION["idProject"];
    $query = "DELETE FROM `UserStory` WHERE idUserStory = $idUs;";
     //working
    $result = $conn->exec($query);
    if ($result !== false) {
        echo $msgUserStoryUpdateSuccess;
        header($locUserStoryList($idproject)); 
    }
    else
    {
        echo $msgUserStoryUpdateError;
    }
?>
