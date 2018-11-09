<?php


session_start();
require 'connect.php';

if (isset($_POST['login_user'])) 
{  
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? $_POST['password'] : null;     
	$password = sha1($password);
    //echo $username ."<br>";
    //echo $password ."<br>";

       //Retrieve the user account information for the given username.

        $stmt = $conn -> query("SELECT login, password, mail FROM Utilisateur where login = '$username' AND password = '$password'");
        $count = $stmt->rowCount();
        if($count <= 0) // query is empty
        {
		echo 'connexion échoué';
        }
        else 
        {
            $row = $stmt->fetch(); //fetch query parm into row array
            header('Location: projectList.php'); 
            echo "l'utilisateur ".$row['login']. " est connecté avec le mail : ". $row['mail']."<br />";
        }

}
?>

<a href="index.php">Home</a>
