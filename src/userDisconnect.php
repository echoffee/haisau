<?php
    session_start ();

    session_unset ();

    session_destroy ();
    $conn = null; //close db
    header("Location: index.php");
?>