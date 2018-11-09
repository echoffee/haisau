<?php

require 'connect.php';

if (isset($_POST['create_user']))
{
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email_address = !empty($_POST['email-address']) ? trim($_POST['email-address']) : null;

    echo $username ."<br>";
    echo $password ."<br>";
    echo $email_address ."<br>";

       //Retrieve the user account information for the given username.

        $stmt = $conn -> query("INSERT INTO Utilisateur (login, password, mail) VALUES ( '$username', '$password', '$email_address');");

        if ($stmt) {
           echo "New record created successfully";
        } else {
           echo "Error: " . $stmt . "<br>" . $conn->error;
        }
}
?>
