<!--
    Connect to the database and verfy user credentals
    Set the session vaibaables
-->
   
<?php 
    
    // Session Start include, before anything else-->
    include_once '../Database/sessionStart.php';
    
    // dbConfig Import (Required Once)
    require_once '../Database/dbConfig.php';
    
    //var_dump($_POST);

    $username = $password = $admin = $contribute = "";
    $username_err = $password_err = $global_err = "";

    // Process the data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // NOT NEEDED (DISABLE SUBMIT TAKES CARE OF THIS, BUT JUST INCASE JAVASCRIPT IS OFF)
        // Check if username is empty
        if(empty(trim($_POST['username'])))
        {

            $username_err = 'Please enter the username field';
        }
        else
        {
            $username = trim($_POST['username']);
        }
        
        // check if password is empty
        if(empty(trim($_POST['password'])))
        {

            $password_err = 'Please enter the password field';
        }
        else
        {
            $password = trim($_POST['password']);
            
            if(isset($SESSION['admin']))
            {
                $admin = $_POST['admin'];
            }
            
            if(isset($SESSION['contribute']))
            {
                $contribute = $_POST['contribute'];
            }
            
        }
        
        
        
        // Validate credentials
        if(empty($username_err) && empty($password_err))
        {

            // Prepare the select statement
            $sql = "SELECT username, password, admin, contribute FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql))
            {
                
                // bind the variables to the prepared statement as params
                mysqli_stmt_bind_param($stmt, "s",$param_username);
                
                // Set the params
                $param_username = $username;
                
                // Attempt to execute the prepared statment
                if(mysqli_stmt_execute($stmt))
                {
                    
                    // Store the results
                    mysqli_stmt_store_result($stmt);
                    
                    // check if the username exists
                    // if it does, verfiy the password
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        
                        // bind the result variables
                        mysqli_stmt_bind_result($stmt, $username, $hashed_password, $admin, $contribute);
                        
                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password))    
                            {
                                // If the password is correct, start a new session
                                session_start();
                                $_SESSION['username'] = $username;
                                $_SESSION['admin'] = $admin;
                                $_SESSION['contribute'] = $contribute;
                                $_SESSION['password'] = $hashed_password;
                                header("location: ../Pages/home.php");
                            }
                            else
                            {
                                // display an error message is the password was incorrect 
                                $password_err = 'The supplied password is incorrect';
                            }
                        }
                    }
                    else
                    {
                        // Username is incorrect: Display an error message witht eh
                        $username_err = "No account found with that username";
                    }
                }
                else
                {
                    $global_err = 'Oops! something went wrong';
                }
            }
        
            // close statement
            mysqli_stmt_close($stmt);
        }
        
        // close the connection
        mysqli_close($conn);
    }

?>
