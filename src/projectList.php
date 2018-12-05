<?php
    require('_strings.php');
    require('checkUserConnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Project List</title>
  </head>
  &nbsp;
  <div class="container">
  <body class="bg-white">
    <div class="row">
    <div class="col-8">
    <h1>List of your current projects</h1>
    </div>
    <div class="col-4">
    <?php
    include("userActions.php"); 
    ?>
    </div>
    </div>
    </div>
    </div>

     <button type="button" id="create-project-btn" onClick="document.location.href='createProject.php'">New Project</button>

      <table style="width:100%">
        <tr>
          <th name='ProjectNameHead'>Project Name</th>
          <th name='SprintNameHead'>Current Sprint Name</th>
          <th name='ProgressHead'>Progress</th>
          <th name='SprintDateEndHead'>Current Sprint End Date</th>
        </tr>

        <?php
          session_start();
          require 'connect.php';

          $query = "SELECT * FROM Projet";
          foreach($conn->query($query) as $projet){

            $query = "SELECT Sprint.idSprint, Sprint.nom, Sprint.dateDebut, Sprint.dateFin, Sprint.idProjet FROM Sprint JOIN Projet ON Projet.idProjet = Sprint.idProjet WHERE Sprint.idProjet = ".$projet[$fldProjectId];
            foreach($conn->query($query) as $sprint){
              if((strtotime($projet[$fldSprintDateStart]) < time()) && strtotime($projet[$fldSprintDateEnd]) > time()){
                $projet[$fldProjectSprint] = $sprint;
                $projet[$fldProjectSprint][$fldSprintDateEnd] = date("d/m/Y", strtotime(substr($projet[$fldProjectSprint][$fldSprintDateEnd], 0, 10)));
              }
            }

            if(!empty($projet[$fldProjectSprint])){
              $query = "SELECT COUNT(*) FROM Tache JOIN Sprint ON Sprint.idSprint = Tache.idSprint WHERE Tache.statut LIKE 'DONE' AND Tache.idSprint = ".$projet[$fldProjectSprint]['idSprint'];
              foreach($conn->query($query) as $taskCount){
                $projet[$fldProjectTaskDoneCount] = $taskCount[0];
              }

              $query = "SELECT COUNT(*) FROM Tache JOIN Sprint ON Sprint.idSprint = Tache.idSprint WHERE Tache.idSprint = ".$projet[$fldProjectSprint]['idSprint'];
              foreach($conn->query($query) as $taskCount){
                $projet[$fldProjectTaskCount] = $taskCount[0];
              }
            }

            else{
              $projet[$fldProjectSprint][$fldSprintName] = "No sprint planned";
              $projet[$fldProjectSprint][$fldSprintDateEnd] = "/";
              $projet[$fldProjectTaskDoneCount] = "";
              $projet[$fldProjectTaskCount] = "";
            }

            echo "<tr><th><a name='". $projet[$fldProjectName]."' href='projectDetails.php?id=". $projet[$fldProjectId] ."'>".$projet[$fldProjectName]."</a><a name='" . $projet[$fldProjectName] . "' href='modifyProject.php?id=".$projet[$fldProjectId]."'><button type='button' id='edit-btn'>Edit</button></a><button name='deleteProject" . $projet[$fldProjectName] . "' type='button' id='delete-btn' onClick='deleteProject(".$projet[$fldProjectId].")'>Delete</button></th><th>".$projet[$fldProjectSprint][$fldSprintName]."</th><th>".$projet[$fldProjectTaskDoneCount]."/".$projet[$fldProjectTaskCount]."</th><th>".$projet[$fldProjectSprint][$fldSprintDateEnd]."</th></tr>";

          }
        ?> 

      </table> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    function deleteProject(id) {
    	if (confirm('Are you sure you want to delete this project?')) {
    		document.location.href='deleteProject.php?id='+id;
		}
    }
    </script>

  </body>
</html>
