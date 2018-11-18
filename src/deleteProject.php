<?php

session_start();
require 'connect.php';

$projectId = $_GET['id'];

$query = "DELETE FROM Projet WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo "Project deleted successfully.";
}
else {
	echo "An error occured while deleting the project";
}

$query = "DELETE FROM Sprint WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo "Project deleted successfully.";
}
else {
	echo "An error occured while deleting the project";
}

$query = "DELETE FROM Tache WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo "Project deleted successfully.";
}
else {
	echo "An error occured while deleting the project";
}

header('Location: projectList.php');
?>
