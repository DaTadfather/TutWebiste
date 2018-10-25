<!--
    Retrive the requested data (tutorial) from the server
-->

<?php

    // import Database Config
    require_once '../Database/dbConfig.php';

    // Create a variable to store the index from $_POST
   $tutorialIndex = $_POST['variable'];
            
    // Select the data (tutorial) that has the same id as the clicked button
    $sql = "SELECT data FROM tutorial WHERE tut_id = $tutorialIndex";
    $result = mysqli_query($conn, $sql);
    $rs = mysqli_fetch_array($result);
            
    $data = $rs['data'];

    // echo the data back
    echo $data;
                
?>