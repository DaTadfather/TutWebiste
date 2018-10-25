<!-- 
    Login Page, user enters credentials  to access website
-->

<!-- Doc Start -->
<?php
    // -- Include Dialog Script //
    include_once '../Scripts/dialogScript.php';
?>

<!-- Menu Item Button -->
<a class="mdl-button 
            mdl-js-button"
        id="quickUserProfileBtn" style="width:100%;text-align:left;">
        PROFILE
</a>

<!-- Include user Profile Dialog -->
<!--link rel="import" href="../User/userProfileDialog.php"-->   
      
<?php
    // -- Include User Dialog Script //
    include_once '../User/userProfileDialog.php';
?>
       
<!-- Call DialogScript -->
<script>
    // Set the dialog class
    // userProfileDiag from userProfileDialog.php
    
    // Set the dialog button
    var showDialogButton = document.querySelector('#quickUserProfileBtn');
    
    // Call the script, with params
    dialogScriptTest(userProfileDiag, showDialogButton);
    
</script>
