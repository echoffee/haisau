<?php

session_start();
require 'connect.php';

$projectId = $_POST['projectId'];
$projectName = trim($_POST['projectName']);

if (empty($projectName)) {
    echo "Project name cannot be empty. <a href='" . $_SERVER["HTTP_REFERER"] . "'>Go back</a>";
    die();
}

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
