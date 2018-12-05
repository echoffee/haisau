<?php

session_start();
require '_strings.php';
require 'connect.php';

$projectId = $_GET['id'];

$query = "DELETE FROM Projet WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo $msgProjectDeletionSuccess;
	header($locProjectList);
}
else {
	echo $msgProjectDeletionError;
}

$query = "DELETE FROM Sprint WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo $msgProjectDeletionSuccess;
	header($locProjectList);
}
else {
	echo $msgProjectDeletionError;
}

$query = "DELETE FROM Tache WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo $msgProjectDeletionSuccess;
	header($locProjectList);
}
else {
	echo $msgProjectDeletionError;
}

$query = "DELETE FROM UserStory WHERE idProjet = $projectId;";

$result = $conn->exec($query);
var_dump($query);
if ($result !== false) { 
	echo $msgProjectDeletionSuccess;
	header($locProjectList);
}
else {
	echo $msgProjectDeletionError;
}
?>
