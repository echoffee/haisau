<?php
    require('checkUserConnect.php');
    session_start();
    require 'connect.php';
    $idUtilisateur = $_SESSION['idUtilisateur'];

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
    <title>Invitations</title>
  </head>
  <body class="bg-white">

    <div class="container">
    &nbsp;
    <div class="row justify-content-md-center">
    <h3>My invitations</h3>
    </div>
    <div class="row justify-content-md-center">

    <a href="projectList.php " class="btn btn-primary btn-md">Back</a>

    </div>
    </div>


    <br>
    <div class="row justify-content-md-center">
      <table class = "table table-striped" style="width:60%">
        <tr>
          <th>Project</th>
          <th>Invitation status</th>
          <th>Actions</th>
        </tr> 
        <?php
        // select all users who don't figure alredy on project 
        $sql = "SELECT Travailler.idUtilisateur, Travailler.idProjet,nom, status  FROM Travailler, Projet
        WHERE idUtilisateur ='$idUtilisateur' AND  Travailler.idProjet = Projet.idProjet";
         if($result = $conn->query($sql))
         {
          if($result->rowCount() > 0)
          {
            while($row = $result->fetch()){
                  echo "<td>" . $row['nom']. "</td>";
                  echo "<td>" . $row['status'] . "</td>";
                  echo "<td>";
                  if($row['status'] == "pending") {
                  echo '<a href="acceptInvitation.php?idUser='.$row['idUtilisateur']."&idProject=".$row['idProjet'].'"class="btn btn-success btn-sm">Accept</a> &nbsp;';               
                  echo '<a href="declineInvitation.php?idUser='.$row['idUtilisateur']."&idProject=".$row['idProjet'].'"class="btn btn-danger btn-sm">Decline</a>';               
                  }
                  echo "</td>";
                  echo "</tr>";
            }
          }
         }
        ?>       
        </table>

    </div>
    </div>
  </body>
</html>
