<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$query = "SELECT * FROM Projet WHERE Projet.idProjet = ".$_GET['id'];
foreach($conn->query($query) as $row){
 $projet = $row;
}
?>

<html>
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
