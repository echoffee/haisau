<?php
session_start();
require 'connect.php';

$sprintName = $_POST['sprintName'];
$projectId = $_POST['projectId'];
$newStart = $_POST['start'];
$newEnd = $_POST['end'];

$query = "INSERT INTO `Sprint` (nom, dateDebut, dateFin, idProjet) VALUES ('$sprintName', '$newStart', '$newEnd', '$projectId');";
// Quite a dirty way to handle this but I have no other ideas right now, sorry
echo "An error occured while creating the project. <a href='createSprint.php?id=$projectId'>Go back</a>";
$result = $conn->exec($query);
if ($result == 1) {
	echo "Sprint " . $sprintName . " created successfully.";
	header('Location: sprintList.php?id='.$projectId); 
}
?>
