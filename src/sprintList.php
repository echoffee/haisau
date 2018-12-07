<?php
require('_strings.php');
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
		<button type="button" id="create-sprint-btn" onClick="document.location.href='createSprint.php?id=<?php echo $projet['idProjet']?>'">New Sprint</button>
		<table style="width:100%">
	    	<tr>
			    <th>Sprint Name</th>
			    <th>Number of Tasks</th>
			    <th>Start Date</th>
			    <th>End Date</th>
			    <th>Difficulty</th>
			    <th>State</th>
	    	</tr>

	    	<?php
				$query = "SELECT * FROM Sprint WHERE Sprint.idProjet = ". $projet['idProjet'] ." ORDER BY Sprint.dateDebut";
				foreach($conn->query($query) as $sprint){
					$sprint[$fldSprintTaskCount] = 0;
					$sprint[$fldSprintDifficulty] = 0;
					$sprint[$fldSprintState] = "STATE";

					if(strtotime($sprint[$fldSprintDateEnd]) < time()) { 
						$sprint[$fldSprintState] = "PREVIOUS";
					}
					else if(strtotime($sprint[$fldSprintDateStart]) < time()) { 
						$sprint[$fldSprintState] = "CURRENT";
					}
					else {
						$sprint[$fldSprintState] = "NEXT";
					}

					$sprint[$fldSprintDateStart] = date("d/m/Y", strtotime(substr($sprint[$fldSprintDateStart], 0, 10)));
					$sprint[$fldSprintDateEnd] = date("d/m/Y", strtotime(substr($sprint[$fldSprintDateEnd], 0, 10)));

					$query = "SELECT cout FROM Tache JOIN Sprint ON Tache.idSprint = Sprint.idSprint WHERE Tache.idSprint = ".$sprint['idSprint'];
					foreach($conn->query($query) as $task){
						$sprint[$fldSprintTaskCount] = $sprint[$fldSprintTaskCount] + 1;
						$sprint[$fldSprintDifficulty] = $sprint[$fldSprintDifficulty] + $task['cout'];
					}

					echo "<tr><th>".$sprint['nom']."</th><th>".$sprint[$fldSprintTaskCount]."</th><th>".$sprint[$fldSprintDateStart]."</th><th>".$sprint[$fldSprintDateEnd]."</th><th>".$sprint[$fldSprintDifficulty]."</th><th>".$sprint[$fldSprintState]."</th><th><a href='taskList.php?id=". $sprint['idSprint'] ."'><button type='button' id='create-sprint-btn '";

					if($sprint[$fldSprintState] == "PREVIOUS") {
						echo "disabled";
					}

					echo ">Add Tasks</button></a></th></tr>";
				}
			?>

		</table>
	</body>
</html>
