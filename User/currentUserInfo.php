<!-- 
    Login Page, user enters credentials  to access website
-->

<!-- Details -->
<div class="currentUserInfo">
 
    <!-- Greeting text -->
    Hello: <?php $user = $_SESSION['username']; echo $user?>
    <br><br>
     <!-- End. Greeting Text -->

    <!-- Permissions Chips -->
    Permissions
    <br>
    
    <span class="mdl-chip mdl-chip--deletable persmissionchips" disabled>
         <span class="mdl-chip__text">Admin</span>
         <button type="button" class="mdl-chip__action" disabled>
         <?php 
            if ($_SESSION['admin'] == 1)
            {
                echo '<i class="material-icons">check-circle</i>';
            }
            else       
            {
               echo '<i class="material-icons">cancel</i>';
            }
         ?>   
         </button>
     </span>
        
    <span class="mdl-chip mdl-chip--deletable persmissionchips" 
        style="padding-left: 5%;" disabled>
         <span class="mdl-chip__text">Editor</span>
         <button type="button" class="mdl-chip__action" disabled>
         <?php 
            if ($_SESSION['contribute'] == 1)
            {
                echo '<i class="material-icons">check-circle</i>';
            }
            else       
            {
               echo '<i class="material-icons">cancel</i>';
            }
         ?>   
         </button>
     </span>


     <!-- End. Permissions -->
  
</div>
 <!-- End. Details

<!-- User Info -->
<div>
    
</div>
 <!-- End. User Info -->

