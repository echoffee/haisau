<?php
session_start();
require 'connect.php';

$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskCost = $_POST['taskCost'];
$sprintId = $_POST['sprintId'];
$taskStatus = "TODO";

$query = "INSERT INTO `Tache` (nom, description, cout, statut, idSprint) VALUES ('$taskName', '$taskDescription', '$taskCost', '$taskStatus', '$sprintId');";
// Quite a dirty way to handle this but I have no other ideas right now, sorry
echo $query;
echo "An error occured while creating the task. <a href='createTask.php?id=$sprintId'>Go back</a>";
$result = $conn->exec($query);
if ($result == 1) {
	echo "Task " . $taskName . " created successfully.";
	header('Location: taskList.php?id='.$sprintId); 
}
?>
