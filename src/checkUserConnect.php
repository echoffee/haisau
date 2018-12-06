<?php
    require("_strings.php");
    session_start();
    if (!isset($_SESSION[$strSessionLogin]) && !isset($_SESSION[$strSessionPassword])) 
    {
        header("Location: index.php");
    }
?>
