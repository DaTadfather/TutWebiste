<!--
    Create a session based on the session identifier passed via dbLogin.php
-->

<?php     
    // dbConfig Import (Required Once)
    require_once '../Database/dbConfig.php';

    // inti the session
    session_start();

    var_dump($_SESSION);

    // unset all the session variables
    $_SESSION = array();

    // destroy the session
    session_destroy();

    var_dump($_SESSION);
    
    //redirect to login page
    header("location: ../Pages/index.php");
    
    exit;
?>