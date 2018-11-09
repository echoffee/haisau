<?php


session_start();
require 'connect.php';

$projectName = $_POST['projectName'];
$sprintDuration = $_POST['sprintDuration'];

$query = "INSERT INTO Projet (nom, dureeSprint) VALUES ( '$projectName', $sprintDuration);";
$result = $conn->exec($query) ;
if ($result == 1) {
	echo "Project " . $projectName . " created successfully.";
	header('Location: projectList.php'); 
}
else
	echo "An error occured while creating " . $projectName . ".";
?>
