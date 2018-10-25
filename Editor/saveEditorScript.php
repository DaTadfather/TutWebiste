<!-- 
    Save Editor Script. Adds a new tutorial to the database
--> 

<!-- Database code -->
<?php 

    //-- Include Session Start -->    
    include_once '../Database/sessionStart.php' ;
        
    // dbConfig Import (Required Once)
    require_once '../Database/dbConfig.php';

    // Variable definitions
    $tutID = $title = $topic = $data = $editdate = "";
    $title_err = $topic_err = $data_err = "";

    // Get the username of the current user 
    $author = $_SESSION['username'];

    // Process data when the form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Validate Title
        if(empty(trim($_POST["title"])))
        {
            $title_err = "Please enter a title";
            echo $title_err;
        }else
        {
            // Prepare a select statement
            $sql = "SELECT tut_id FROM tutorial WHERE title = ?";
            
            if($stmt = mysqli_prepare($conn, $sql))
            {
                // Bind the variable to the prepared statement as params
                mysqli_stmt_bind_param($stmt, 's', $param_title);
                
                // Set the parameters
                $param_title = trim($_POST['title']);
                
                // Attempt the execute the prepared Statement
                if(mysqli_stmt_execute($stmt))
                {
                    // Store the results
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        $title_err = "This title is already taken";
                    }else
                    {
                        $title = trim($_POST["title"]);
                    }
                }else
                {
                    echo "Opps!! Something went wrong. Please try again later";
                }
            }
            mysqli_stmt_close($stmt);
        }
        
        if(empty(trim($_POST['data'])))
        {
            $data_err = "Data field is empty";
            echo $data_err;
        }else
        {
            $data = trim($_POST['data']);
        }
        
        if(empty(trim($_POST['topic'])))
        {
            $topic_err = "Topic field is empty";
            echo $topic_err;
        }else
        {
            $topic = trim($_POST['topic']);
        }
        
        
        // Check for Input Errors
        if(empty($title_err) && empty($data_err))
        {
            // Insert statement
            $sql = "INSERT INTO tutorial (title, topic, data, author) VALUES (?,?,?, ?)";
            
            if($stmt = mysqli_prepare($conn, $sql))
            {
                // Bind the variables
                mysqli_stmt_bind_param($stmt, "ssss", $param_title, $param_topic, 
                                                      $param_data, $param_author);
                
                $param_title = $title;
                $param_topic = $topic;
                $param_data = $data;
                $param_author = $author;
                
                // Attempt to execute the prepared statement 
                if(mysqli_stmt_execute($stmt))
                {
                    // refersh the page // redirrect // do somtehing
                    //header("Refresh:0");
                    echo '<script> location.reload(true);</script>';
                }else
                {
                    echo 'Something Wrong, stmt execute error';
                }
            }
            mysqli_stmt_close($stmt);
        }
        
        mysqli_close($conn);
    }


?>


