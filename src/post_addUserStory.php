<?php


session_start();
require 'connect.php';

if (isset($_POST['add_us']) || isset($_POST['add_sandbox'])) 
{

  
    $desUs = $_POST['desc'];
    $prioUs = $_POST['prio'];
    $diffUs = $_POST['diff'];
    $idproject = $_SESSION["idProject"];

    if(isset($_POST['add_us']))
    $type = 'backlog';
    if(isset($_POST['add_sandbox']))
    $type = 'sandbox';

    $stmt = $conn -> query("SELECT count(*) AS numUserStory from UserStory where idProjet = '$idproject '");
    $count = $stmt->rowCount();
    if($count > 0)
    {
        $row = $stmt->fetch();
        $numUs = $row['numUserStory']+1; 
        echo $numUs;
        
    }
    $query = "INSERT INTO UserStory (`num`, `description`, `priorite`, `difficulte`, `type`, `idProjet`)
     VALUES ('$numUs','$desUs','$prioUs','$diffUs','$type','$idproject')"; 
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
