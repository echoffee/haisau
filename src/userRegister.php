<?php

require 'connect.php';

if (isset($_POST['create_user']))
{
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? sha1($_POST['password']) : null;
    $email_address = !empty($_POST['email-address']) ? trim($_POST['email-address']) : null;

       //Retrieve the user account information for the given username.
	if ($username != null && $password != null){
        	$stmt = $conn -> query("INSERT INTO Utilisateur (login, password, mail) VALUES ( '$username', '$password', '$email_address');");
	}

        if ($stmt) {
           echo "New record created successfully";
        } else {
           echo "Error: " . $stmt . "<br>" . $conn->error;
        }
}
?>


<a href="index.php">Home</a>
