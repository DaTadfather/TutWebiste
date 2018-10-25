<!--
    Diaglog pop-up, user can request their password to be re-set 
-->

<!-- Import dialog Script -->
<?php include_once '../Scripts/dialogScript.php'; ?>

<!-- Forgot Password Button Div -->
<div class="g_centerAlign">
   
    <!--  Forgot Password Button -->
    <button class="mdl-button
                   mdl-js-button
                   mdl-js-ripple-effect
                   mdl-button--primary"
               id="fpwdBtn">
               FORGOT PASSWORD
    </button>
     <!-- End. Forgot Button -->
        
</div>
 <!-- End.   -->

<!-- Forgot Password Dialog -->
<dialog class="mdl-dialog" style="width:25%;" id="fpwdDiag">
    
    <!-- Dialog Content -->
    <div class=" mdl-dialog__content">
     
     <!-- Title -->
     <h6>
         Request Password!
     </h6>
     
     <!-- Add a space between the -->
     <br>
      
      <!-- Dialog Form -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
          <!-- Textfields with Floating Labels -->
          
          <!-- Username -->
            <div class="mdl-textfield 
                        mdl-js-textfield 
                        mdl-textfield--floating-label">

                <input class="mdl-textfield__input"
                       type="email" 
                       id="pwd_username"
                       name="pwd_username">
                       
                <label class="mdl-textfield__label" for="pwd_username">username...</label>

                <!-- Textfield Verification -->
                <span class="mdl-textfield__error">Invalid Username</span>

            </div>
            <!-- End. Username Textfield -->
          
      </form>
       <!-- End. Dialog Form -->
        
    </div>
     <!-- End. Dialog Content -->
    
    <!-- Dialog Actions -->
    <div class="mdl-dialog__actions">
       
       <!-- Submit PWD request button -->
       <button class="mdl-button mdl-button--accent" type="submit">
           Submit
       </button>
       <!-- End. Submit PWD -->
       
       <!-- Cancel PWD request button -->
       <button type="button" class="mdl-button close mdl-button--primary">
           Cancel
       </button>
       <!-- End. Cancel PWD -->
        
    </div>
     <!-- end. Dialog Actions -->
    
</dialog>
 <!-- End. Forgot Password Dialog -->

<!-- Call DialogScript -->
<script>
        // Set the dialog class
        var dialog = document.getElementById('fpwdDiag');
        // Set the dialog button
        var showDialogButton = document.querySelector('#fpwdBtn');
    dialogScriptTest(dialog, showDialogButton);
</script>








