<!-- 
    New User Script. Adds new use to the SQL database
--> 

<!-- Include Session Start -->    
<?php include_once '../Database/sessionStart.php' ?>

<!-- Styling -->
<style>
    .heightFormating
    {    
        max-height: 550px;
    }
    
    .overflowScroll
    {   
        overflow-y: scroll;
        overflow-x: hidden;
    }
</style>
      

<!-- Database add code -->
<?php

    // dbConfig Import (Required Once)
    require_once '../Database/dbConfig.php';

    // Varibale definitions, initialised with empty variables 
    $username = $password = $adminswitch = $contributeswitch = "";
    $username_err = $password_err = "";

    // Process the data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // Validate Username
        if(empty(trim($_POST["username"])))
        {
            $username_err = "Please enter a username";
            echo $username_err;
        }else
        {
            
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql))
            {

                // Bind the variable to the preapred statement as params
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set the parameters
                $param_username = trim($_POST["username"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt))
                {
                    // Store the results
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken";
                    }else
                    {

                        $username = trim($_POST["username"]);
                    }
                }else
                {
                    echo "Opps! Something went wrong. Please try again later";
                }
            }
                
            mysqli_stmt_close($stmt);
        }   // end validate Username
        
            
        // NOT NEEDED (DISABLE SUBMIT TAKES CARE OF THIS, BUT JUST INCASE JAVASCRIPT IS OFF)
        // Validate the password
        if(empty(trim($_POST['password'])))
        {
             $password_err = "Password Field Empty";
            echo $passwrd_err;
            
        }elseif(strlen(trim($_POST['password'])) < 8)
        {
             $password_err = "Invalid Password, must contain 1 UPPERCASE, 1 lowercase & 1 Numeric ";
        }
        else
        {
            $password = trim($_POST['password']);
        } // end validate password
        
        // Validate the admin check box
        if(isset($_POST['adminswitch']))
        {
            $adminswitch = 1;            
        }
        else
        {
            $adminswitch = 0;
        }   
        //end validate admin switch
        
        // Validate the contribute check box
        if(isset($_POST['contributeswitch']))
        {
            $contributeswitch = 1;            
        }
        else
        {
            $contributeswitch = 0;
        }   
        //end validate admin switch
        
        
        
        // Check for input errors
        if(empty($username_err) && empty($password_err))
        {    
            
            // Insert statement
            $sql = "INSERT INTO users (username, password, admin, contribute) VALUES (?,?,?, ?)";
            
            if($stmt = mysqli_prepare($conn, $sql))
            {
                // Bind the variables
                mysqli_stmt_bind_param($stmt, "ssii", $param_username, $param_password, $param_admin, $param_contribute);
                
                // Set the params
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Create a password hash
                $param_admin = $adminswitch;
                $param_contribute = $contributeswitch;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt))
                {
                    
                    // Refresh the admin page -- adds the users to the managed users list
                    header("location: ../Pages/admin.php");
                }
                else
                {
                    echo "Something went wrong, stmt_execute error";
                }// end attampt execute prepared statement
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
            
        } // end check for input
                
        
        
        mysqli_close($conn);
        
        
    } // end process form data
?>