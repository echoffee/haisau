<?php


session_start();
require 'connect.php';

//if (isset($_POST['login_user'])) 
{  
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;     

    //echo $username ;
    //echo $passwordAttempt ;

       //Retrieve the user account information for the given username.

        $stmt = $conn -> query("SELECT name, password FROM users");
        while ($row = $stmt->fetch()) {
            echo $row['name']."<br />\n";
            echo $row['password']."<br />\n";
        }

}
?>
