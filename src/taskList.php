<?php
session_start();
require 'connect.php';
$query = "SELECT * FROM Sprint WHERE Sprint.idSprint = ".$_GET['id'];
foreach($conn->query($query) as $row){
	$sprint = $row;
}
?>

<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<title>Task List</title>
	 </head>
	<body>
		<p>
			<h1>Sprint <?php echo $sprint['nom'] ?></h1>
		</p>
		<button type="button" id="create-task-btn">Add Tasks</button>
		<table style="width:100%">
	    	<tr>
			    <th>Task Name</th>
			    <th>Description</th>
			    <th>Cost</th>
			   	<th>State</th>
	    	</tr>

	    	<?php
	    		$query = "SELECT * FROM Tache WHERE Tache.idSprint = ".$sprint['idSprint'];
	    		foreach($conn->query($query) as $task){
	    			echo "<tr><th>".$task['nom']."</th><th>".$task['description']."</th><th>".$task['cout']."</th><th>".$task['statut']."</th><th><button id='edit-task-btn'>Edit</button><button id='delete-task-btn' onClick='deleteTask(".$task['idTache'].")'>Delete</button></th></tr>";
	    		}
	    	?>

		</table>

	<script>
    function deleteTask(id) {
    	if (confirm('Are you sure you want to delete this task?')) {
    		document.location.href='deleteTask.php?id='+id;
		}
    }
    </script>
	</body>
</html>
