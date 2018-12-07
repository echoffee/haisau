<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$currentIdProject = $_GET['id'];
$query = "SELECT * FROM Projet WHERE Projet.idProjet = ".$_GET['id'];
foreach($conn->query($query) as $row){
 $projet = $row;
}
?>

<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title><?php echo $projet['nom'] ?> Project Details</title>
 </head>
 <body>
 &nbsp;
 <div class="row">
    <div class="col-8">
   <h1>Project <?php echo $projet['nom'] ?></h1>
   </div>
  <div class ="col-4">
  <?php
     echo '<a href="inviteDev.php?id='.$currentIdProject.' " class="btn btn-success btn-md">Invite Dev</a>';                
  ?>
</div>

</div>
<div class="row justify-content-md-center">
    <?php
      echo '<a href="userStoryList.php?id='.$projet['idProjet'].'"class="btn btn-primary btn-md">Backlog</a> &nbsp'
    ?>  
    <?php
      echo '<a href="sprintList.php?id='.$projet['idProjet'].'"class="btn btn-primary btn-md">Sprints</a>&nbsp'
    ?>
      <a href="projectList.php"class="btn btn-primary btn-md">Back</a>
  </div>
  <div>
  <div class="container">
    &nbsp;
    <div class="row justify-content-md-center">
    <h3>Working on this project</h3>
    </div>
  <div class="row justify-content-md-center">
      <table class = "table table-striped" style="width:60%">
        <tr>
          <th>Developper</th>
          <th>Mail</th>
        </tr> 
        <?php
        $sql = "SELECT DISTINCT  `login`,  `mail` FROM `Utilisateur`, Travailler
         WHERE  Travailler.idProjet = '$currentIdProject' AND Utilisateur.idUtilisateur = Travailler.idUtilisateur
         AND status != 'pending'";
        if($result = $conn->query($sql) && $result->rowCount() > 0)
        {
          while($row = $result->fetch()){
                echo "<td>" . $row['login'] . "</td>";
                echo "<td>" . $row['mail'] . "</td>";
                echo "</tr>";
          }
        }
        ?>       
        </table>
  </div>
 </body>
</html>
