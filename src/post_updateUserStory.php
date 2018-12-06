<?php


session_start();
require 'connect.php';

if (isset($_POST['update_us'])) 
{
    $numUs = $_POST['numUs'];
    $desUs = $_POST['desc'];
    $prioUs = $_POST['prio'];
    $diffUs = $_POST['diff'];
    $idUs = $_SESSION["idUserStory"];
    $idproject = $_SESSION["idProject"];
    echo $numUs ;
    echo $desUs ;
    echo$prioUs ;
    echo $diffUs; 


    //,description='$desUs',priorite='$prioUs',
    //difficulte='$diffUs'
    $query = "UPDATE UserStory SET num = '$numUs', description = '$desUs', priorite = '$prioUs', difficulte = '$diffUs'
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
