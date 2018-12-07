<?php


session_start();
require 'connect.php';

if (isset($_POST['add_us'])) 
{


    
     
    
    $desUs = $_POST['desc'];
    $prioUs = $_POST['prio'];
    $diffUs = $_POST['diff'];
    $idproject = $_SESSION["idProject"];

    $stmt = $conn -> query("SELECT count(*) AS numUserStory from UserStory where idProjet = '$idproject '");
    $count = $stmt->rowCount();
    if($count > 0)
    {
        $row = $stmt->fetch();
        $numUs = $row['numUserStory']+1; 
        echo $numUs;
        
    }

    $query = "INSERT INTO UserStory (`num`, `description`, `priorite`, `difficulte`, `idProjet`)
     VALUES ('$numUs','$desUs','$prioUs','$diffUs','$idproject')"; 
     //working
    $result = $conn->exec($query) ;
    if ($result == 1) {
        echo "Us  created successfully.";
        header("Location: userStoryList.php?id=".$idproject.""); 
    }else{
        echo "An error occured while creating the us";
    }
}
?>
