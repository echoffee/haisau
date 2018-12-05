<?php

session_start();
require 'connect.php';

$projectId = $_GET['id'];

$query = "DELETE FROM Projet WHERE idProjet = $projectId;";

$result = $conn->exec($query);
if ($result !== false) { 
	echo "Project deleted successfully.";
	header('Location: projectList.php');
}
else {
	echo "An error occured while deleting the project";
}
?>
