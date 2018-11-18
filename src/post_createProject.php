<?php


session_start();
require 'connect.php';

$projectName = $_POST['projectName'];
$sprintDuration = $_POST['sprintDuration'];
$query = "INSERT INTO Projet (nom, dureeSprint) VALUES ( '$projectName', $sprintDuration);";
// Quite a dirty way to handle this but I have no other ideas right now, sorry
echo "An error occured while creating the project. <a href='createProject.php'>Go back</a>";
$result = $conn->exec($query) ;
if ($result == 1) {
	echo "Project " . $projectName . " created successfully.";
	header('Location: projectList.php'); 
}
?>
