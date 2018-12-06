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

        $stmt = $conn -> query("SELECT idUtilisateur, login, password, mail FROM Utilisateur where login = '$username' AND password = '$password'");
        $count = $stmt->rowCount();
        if($count <= 0) // query is empty
        {
		echo 'Error :'; //Missing real message
        }
        else 
        {
            $row = $stmt->fetch(); //fetch query parm into row array
            $_SESSION['idUtilisateur'] = $row['idUtilisateur']; 
            $_SESSION['login'] = $username;
            $_SESSION['password'] = $password;
            header('Location: projectList.php'); 
        }

}
?>

<a href="index.php">Home</a>
