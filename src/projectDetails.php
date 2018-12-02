<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$query = "SELECT * FROM Projet WHERE Projet.idProjet = ".$_GET['id'];
foreach($conn->query($query) as $row){
 $projet = $row;
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title><?php echo $projet['nom'] ?> Project Details</title>
 </head>
 <body>
  <p>
   <h1>Project <?php echo $projet['nom'] ?></h1>
  </p>
  <p>
    <?php
      echo "<a href='userStoryList.php?id=".$projet['idProjet']."'>Backlog</a>"
    ?>
  </p>
  <p>
    <?php
      echo "<a href='sprintList.php?id=".$projet['idProjet']."'>Sprints</a>"
    ?>
  </p>
 </body>
</html>
