<!--
    Create the login form and pass data to the loginScript
-->

<!-- Session Start include, before anything else-->
<?php 
    include_once '../Database/sessionStart.php'; 
    include_once '../Login/loginScript.php';
?>

<!-- Includes -->
<link type="text/css" rel="stylesheet" href="../Login/loginCard.css">

<?php 
    // Include the Login Code to handle form submission
    

    // Include AJAX for disable submit button -> moved to disable submit btn
    //include_once '../Include/importJQuerryAjax.php'; 
?>

<!-- Login Card -->
<div class="mdl-card
            mdl-shadow--4dp
            g_centerAlign
            card_center">
    
    <div class="mdl-card mdl-shadow--4dp" 
         style="width: 80%;
                height: 80%;
                border-radius: 40%;
                margin: auto;"> <!-- have to do it this way because css is messy -->
    <!-- Avatar Image -->
    <div class="mdl-card-media">
       <img src="../Assets/Avatars/avatar-06.png" alt="avatar_image" style="width: 90%;">        
    </div>
     <!-- End. Avatar image -->
     </div>
     
     <!-- Card Title -->
     <div class="mdl-card_title mdl-color-text--grey" style="margin:0%;">
         <h2>Sign In</h2>
     </div>
      <!-- End. Card Title-->
      
      <!-- Input Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" id="newuserform">
    
        <!-- Textfields with floating labels -->
        
        <!-- Username -->
        <div class="mdl-textfield 
                        mdl-js-textfield 
                        mdl-textfield--floating-label
                        input_group
                        form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

            <input class="mdl-textfield__input form-control"
                   value="<?php echo $username; ?>" 
                   type="email" 
                   id="username"
                   name="username">
                       
            <label class="mdl-textfield__label" for="username">username...</label>

            <!-- Textfield Verification -->
            <span class="mdl-textfield__error">Invalid Username</span>

        </div>
         <!-- End. Username -->

        <!-- Password -->
        <div class="mdl-textfield 
                    mdl-js-textfield 
                    mdl-textfield--floating-label
                    form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

        <!-- Hiden pasword text field, requires:
             1 Uppercase, 1 lowercase and 1 number. Must be 8 chaacters or more -->
            <input class="mdl-textfield__input form-control" 
                   type="password" 
                   id="password" 
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   name = "password">

            <label class="mdl-textfield__label" for="password">password...</label>

            <!-- Textfield Verification -->
            <div id="message">
                <span class="mdl-textfield__error">invalid password</span>
            </div>
            <!-- End. Textfield Verification -->

        </div>
        <!-- End. Password -->
        
        <!-- Separate the enter button from the textfiels -->
        <br>
        
        <!-- Form Group -->
        <div class="form-group">
            <!-- Enter Button -->
            <button class=" mdl-button
                            mdl- js-button
                            mdl-button--raised
                            mdl-js-ripple-effect
                            mdl-button--fab
                            mdl-button--accent"
                     type="submit"
                       id="submitBtn"
                     name="submitBtn">
                <i class="material-icons" alt="signin">keyboard_arrow_right</i>
            </button>
             <!-- End. Enter Button -->
         </div>
          <!-- End. Form-Group -->
         
        <!-- Add tooltip to the Enter Button
        <div class="mdl-tooltip" data-mdl-for="submitBtn">LOGIN</div>
        <!-- End. Tooltip -->
    
    </form>
      <!-- End. Input Form -->
            
    
</div>
<!-- End. Login Card -->

<?php

    // Include Disable Submit -->
    include_once '../Scripts/disableSubmitScript.php';

?>

