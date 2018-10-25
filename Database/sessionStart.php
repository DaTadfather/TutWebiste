<!--
    Create a session based on the session identifier passed via dbLogin.php
-->
    
<?php

    // init the session
    session_start();
    
    //disabled during testing, have to log in everytime
    //if(!isset($_SESSION['username']) || empty($_SESSION['username']))
    //{
    ////    header("location: ../LoginPage/Index.php");
    //   exit;
    //}

?>