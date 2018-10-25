<!-- 
    Database connection
-->
   
<?php

    // Default Database credentials (user 'root' with no password)
    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'Admin');
    define('DB_PASSWORD', 'admin');
    define('DB_NAME', 'assignmentwebsite');

    // Connect to mySQL database
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check if connection was established
    if($conn->connect_error){
        
        echo 'Connection Error:' . $conn->connect_error;
        exit();
      }else
    {

        // Only used during testing
        /*echo 'Connected succesfully', 
             '<br> Sever: '.DB_SERVER, 
             '<br> Username: '.DB_USERNAME, 
             '<br> Name: '.DB_NAME;*/
    }
    
?>