<?php
require('checkUserConnect.php');
session_start();
require 'connect.php';
$idUser = $_SESSION['idUtilisateur'];
$projectId = $_GET['id']

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <title>Developper List</title>
  </head>
  <body class="bg-white">

    <div class="container">
    &nbsp;
    <div class="row justify-content-md-center">
    <h3>Available Developper</h3>
    </div>
    <div class="row justify-content-md-center">
    <?php
    echo '<a href="projectDetails.php?id='.$projectId.' " class="btn btn-primary btn-md">Back</a>'
    ?>
    </div>
    </div>


    <br>
    <div class="row justify-content-md-center">
      <table class = "table table-striped" style="width:60%">
        <tr>
          <th>Developper</th>
          <th>Mail</th>
          <th>Actions</th>
        </tr> 
        <?php
        // select all users who don't figure alredy on project if we dont want to invite ourself on project 
        // add this conditon idUtilisateur != '$idUser' AND
        $sql = "SELECT * FROM Utilisateur where  idUtilisateur
                NOT IN ( SELECT Travailler.idUtilisateur from Travailler,Projet
                WHERE $projectId = Travailler.idProjet ) ";
         if($result = $conn->query($sql))
         {
          if($result->rowCount() > 0)
          {
            while($row = $result->fetch()){
                  echo "<td>" . $row['login'] . "</td>";
                  echo "<td>" . $row['mail'] . "</td>";
                  echo "<td>";
                  echo '<a href="inviteDevPost.php?idUser='.$row['idUtilisateur']."&idProject=".$projectId.'"class="btn btn-success btn-sm">Invite</a> &nbsp;';               
                  echo "</td>";
                  echo "</tr>";
            }
          }
         }
        ?>       
        </table>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>