<?php 
//retrive clicked project id and set it as global variable 
 require "connect.php";
  session_start(); 
  $_SESSION["idProject"] = $_GET['id'];
  $idProject = $_SESSION["idProject"];
  //get project name from id 
  $query = $conn -> query("SELECT `nom` FROM `Projet` WHERE idProjet = '$idProject'");
  $row = $query->fetch();
  $row['nom'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <title>Backlog</title>
  </head>
  <body class="bg-white">

    <div class="container">
    <div class="row justify-content-md-center">
    <?php echo "<h3> Project ".$row['nom'] ." user story</h3>";?>
    </div>
    </div>

    <div class="container">
    <div class="row justify-content-md-center">
    <a href="addUserStory.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Add new user story</a> &nbsp;
    <a href="projectList.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Back</a>
    </div>
    </div>
    <br>
      <table class = "table table-striped" style="width:100%">
        <tr>
          <th>Num</th>
          <th>description</th>
          <th>priorité</th>
          <th>difficulté</th>
          <th>Actions</th>
        </tr> 
        <?php
        require 'connect.php';
        $sql = "SELECT  * FROM `UserStory`
         WHERE `idProjet` = '$idProject'";
         if($result = $conn->query($sql))
         {
          if($result->rowCount() > 0)
          {
            while($row = $result->fetch()){
                  echo "<td>" . $row['num'] . "</td>";
                  echo "<td>" . $row['description'] . "</td>";
                  echo "<td>" . $row['priorite'] . "</td>";
                  echo "<td>" . $row['difficulte'] . "</td>";
                  echo "<td>";
                  echo '<a href="updateUserStory.php?id='.$row['idUserStory'].' "class="btn btn-success btn-sm">update</a> &nbsp;';               
                  echo '<a href="deleteUserStory.php?id='.$row['idUserStory'].' " class="btn btn-danger btn-sm">delete</a>';                
                  echo "</td>";
                  echo "</tr>";
            }
          }
         }
        ?>       
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
