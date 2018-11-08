
<?php

try {
    $conn = new PDO('mysql:host=mysql;port=3306;dbname=haisau', 'root', 'root');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
    echo "Connected successfully to haisau database <br>";
=======
>>>>>>> 7fb026870e005df11ede1d0bd5cb4f3d567a2eb1
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
