<?php

session_start();
require 'connect.php';

$projectId = $_POST['projectId'];
$projectName = $_POST['projectName'];

$query = "UPDATE Projet SET nom = '$projectName' WHERE idProjet = $projectId;";

$result = $conn->exec($query);
if ($result !== false) {
	echo "Project " . $projectName . " modified successfully.";
	header('Location: projectList.php'); 
}
else {
	echo "An error occured while modifying " . $projectName . ".";
}
?>
