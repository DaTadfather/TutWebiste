<!-- 
    New User Card. Enables Admin to add new users to the system
-->

<style>
    .oddSpacing{
        text-align: center;
    }
    
    .addBtn{
        margin-bottom: 10%;
        padding-bottom: 10%;
    }
    
    .aStyle{
        text-decoration: none;
    }
    
    .globalSpacing{
        padding-left: 1%;
        padding-right: 1%;
    }

</style>

<?php 

    require_once '../Admin/newUserScript.php';
  // Include AJAX for disable submit button
?>

<!-- Used for testing purposes.. comment out on finish -->
<!--link rel="import" href="../Include/importMDL.html"-->


<!-- New User Card-->
<div class="mdl-cell
            mdl-cell--3-col
            mdl-card
            mdl-shadow--4dp
            globalSpacing
            oddSpacing">
    
    <!-- New User Title -->
    <div>
       <h2 class="mdl-color-text--grey">Add New User</h2>
    </div>
    <!-- End. New User Title -->
        
    <!-- New User Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="newuserform" autocomplete="off" 
                style="text-align:center">
    
    <!-- Detaits Text -->
    <div class="mdl-card__subtitle-text mdl-color-text--red">
        <h6>User Details</h6>
    </div>
     <!-- End. Details Text -->
     
     <!-- Simple Textfields-->
     <!-- User Name -->
        <div class="mdl-textfield 
                    mdl-js-textfield">

            <input class="mdl-textfield__input form-control" type="email" name="username" id="username" value="<?php echo $username; ?>">

            <label class="mdl-textfield__label" for="username">UserName</label>

        </div>
         <!-- End. Username -->
         
         <!-- Password -->
        <div class="mdl-textfield 
                    mdl-js-textfield">

            <input class="mdl-textfield__input form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" name="password" value="<?php echo $password; ?>">

            <label class="mdl-textfield__label" for="password">Password</label>

        </div>
         <!-- End. Password -->
         
    </form>
     <!-- End. New User Form -->
     
     
    <!-- Priviledges Accordion Button -->
    <div class="mdl-card__actions oddSpacing">
    
        <a href="#" class="collapsible aStyle mdl-color-text--red">Privileges</a>
             
    <!-- Accordion Content -->
    <div class="content">
    
    <!-- Privileges List & Toggles -->
    <!-- Used to give a new user certain rights when creating an account -->

       <div id="daddydiv" class="mdl-grid">
       
       <div id="admin" class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp"  style="min-height: 0; height:10%">
       Admin
       
       <label class="mdl-switch mdl-js-switch mdl-shadow--2pd"
       for="adminswitch" form="newuserform" style="margin-left:30%;">
       
       <input type="checkbox" id="adminswitch" name="adminswitch" class="mdl-switch__input"
       value="<?php echo $adminswitch;?>">
       </label>
       
       </div>
       
       <div id="editor" class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp" style="min-height: 0; height:10%">
       Editor
       
       <label class="mdl-switch mdl-js-switch mdl-shadow--2pd"
       for="contributeswitch" form="newuserform" style="margin-left:30%;">
       
       <input type="checkbox" id="contributeswitch" name="contributeswitch" class="mdl-switch__input"
       value="<?php echo $contributeswitch;?>">
       </label>
       
       </div>
       
       <div id="something" class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp" style="min-height: 0; height:10%">
       Boss-man
       
        <i class="material-icons">vpn_key</i>   
       
       </div>
       
        </div>
    </div>  
    <!-- End. Accordion content --> 
       
   </div>
    <!-- End. Priviledges Accordion Button -->
       
       <br>
        
    <!-- Add Button + Add a user to the database -->
    <button id="submitBtn" 
            class="mdl-button 
                     mdl-js-button 
                     mdl-button--fab 
                     mdl-js-ripple-effect 
                     mdl-button--colored
                     mdl-shadow--4dp" 
             form="newuserform" 
             type="submit" 
             value="submit" 
             name="submitBtn">
        <i class="material-icons">person_add</i>   
    </button>
    <!-- End. Add Button -->
    <br>
     
</div>
 <!-- End. New User Card -->
 
<!-- New User Includes -->
<?php
    include_once '../Scripts/disableSubmitScript.php';
    include_once '../Scripts/accordion.php';
?>