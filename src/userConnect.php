<?php


session_start();
require '_strings.php';
require 'connect.php';

$strUserName = "username";
$strPassword = "password";

if (isset($_POST['login_user'])) 
{  
    $username = !empty($_POST[$strUserName]) ? trim($_POST[$strUserName]) : null;
    $password = !empty($_POST[$strPassword]) ? $_POST[$strPassword] : null;     
	$password = sha1($password);

       //Retrieve the user account information for the given username.

        $stmt = $conn -> query("SELECT idUtilisateur, login, password, mail
        FROM Utilisateur where login = '$username' AND password = '$password'");
        $count = $stmt->rowCount();
        if($count <= 0) // query is empty
        {
		echo 'Error :'; //Missing real message
        }
        else 
        {
            $row = $stmt->fetch(); //fetch query parm into row array
            $_SESSION['idUtilisateur'] = $row['idUtilisateur']; 
            $_SESSION[$strSessionLogin] = $username;
            $_SESSION[$strSessionPassword] = $password;
            header('Location: projectList.php'); 
        }

}
?>

<a href="index.php">Home</a>
