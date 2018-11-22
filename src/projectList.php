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
  <body class="bg-white">
    <p>
      <h1>List of your current projects</h1>
    </p>

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

            //var_dump($projet);

            $query = "SELECT Sprint.idSprint, Sprint.nom, Sprint.dateDebut, Sprint.dateFin, Sprint.idProjet FROM Sprint JOIN Projet ON Projet.idProjet = Sprint.idProjet WHERE Sprint.idProjet = ".$projet['idProjet'];
            foreach($conn->query($query) as $sprint){
              if((strtotime($sprint['dateDebut']) < time()) && strtotime($sprint['dateFin']) > time()){
                $projet['currentSprint'] = $sprint;
                $projet['currentSprint']['dateFin'] = date("d/m/Y", strtotime(substr($projet['currentSprint']['dateFin'], 0, 10)));
              }
            }
            //var_dump($projet['currentSprint']);

            if(!empty($projet['currentSprint'])){
              $query = "SELECT COUNT(*) FROM Tache JOIN Sprint ON Sprint.idSprint = Tache.idSprint WHERE Tache.statut LIKE 'DONE' AND Tache.idSprint = ".$projet['currentSprint']['idSprint'];
              foreach($conn->query($query) as $taskCount){
                $projet["nbTachesDone"] = $taskCount[0];
              }

              $query = "SELECT COUNT(*) FROM Tache JOIN Sprint ON Sprint.idSprint = Tache.idSprint WHERE Tache.idSprint = ".$projet['currentSprint']['idSprint'];
              foreach($conn->query($query) as $taskCount){
                $projet["nbTachesTotal"] = $taskCount[0];
              }
            }

            else{
              $projet['currentSprint']['nom'] = "No sprint planned";
              $projet['currentSprint']['dateFin'] = "/";
              $projet['nbTachesDone'] = "";
              $projet['nbTachesTotal'] = "";
            }

            echo "<tr><th><a name='". $projet['nom']."' href='projectDetails.php?id=". $projet['idProjet'] ."'>".$projet['nom']."</a><a name='" . $projet['nom'] . "' href='modifyProject.php?id=".$projet['idProjet']."'><button type='button' id='edit-btn'>Edit</button></a><button type='button' id='delete-btn' onClick='deleteProject(".$projet['idProjet'].")'>Delete</button></th><th>".$projet['currentSprint']['nom']."</th><th>".$projet['nbTachesDone']."/".$projet['nbTachesTotal']."</th><th>".$projet['currentSprint']['dateFin']."</th></tr>";

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
		} else {
    		
		}
    }
    </script>

  </body>
</html>
