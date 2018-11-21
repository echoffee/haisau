<?php
session_start();
require 'connect.php';
$query = "SELECT * FROM Projet WHERE Projet.idProjet = ".$_GET['id'];
foreach($conn->query($query) as $row){
	$projet = $row;
}
?>

<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<title>Sprint List</title>
	 </head>
	<body>
		<p>
			<h1>Project <?php echo $projet['nom'] ?></h1>
		</p>
		<button type="button" id="create-sprint-btn">New Sprint</button>
		<table style="width:100%">
	    	<tr>
			    <th>Sprint Name</th>
			    <th>Number of Tasks</th>
			    <th>Start Date</th>
			    <th>End Date</th>
			    <th>Difficulty</th>
	    	</tr>

	    	<?php
				$query = "SELECT * FROM Sprint WHERE Sprint.idProjet = ". $projet['idProjet'];
				foreach($conn->query($query) as $sprint){
					$sprint['dateDebut'] = date("d/m/Y", strtotime(substr($sprint['dateDebut'], 0, 10)));
					$sprint['dateFin'] = date("d/m/Y", strtotime(substr($sprint['dateFin'], 0, 10)));
					$sprint['nbTasks'] = 0;
					$sprint['difficulty'] = 0;

					$query = "SELECT cout FROM Tache JOIN Sprint ON Tache.idSprint = Sprint.idSprint WHERE Tache.idSprint = ".$sprint['idSprint'];
					foreach($conn->query($query) as $task){
						$sprint['nbTasks'] = $sprint['nbTasks'] + 1;
						$sprint['difficulty'] = $sprint['difficulty'] + $task['cout'];
					}

					echo "<tr><th>".$sprint['nom']."</th><th>".$sprint['nbTasks']."</th><th>".$sprint['dateDebut']."</th><th>".$sprint['dateFin']."</th><th>".$sprint['difficulty']."</th></tr>";
				}
			?>

		</table>
	</body>
</html>
