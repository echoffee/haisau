<?php

session_start();
require 'connect.php';

$taskId = $_GET['id'];

$query = "SELECT * FROM Tache WHERE idTache = $taskId;";
foreach($conn->query($query) as $row){
	$sprintId = $row['idSprint'];
}

$query = "DELETE FROM Tache WHERE idTache = $taskId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo "Task deleted successfully.";
	header('Location: taskList.php?id='.$sprintId);
}
else {
	echo "An error occured while deleting the task";
}