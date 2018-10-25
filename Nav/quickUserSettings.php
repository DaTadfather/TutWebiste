<!--
    Create quick user settings button and contents
-->

<!-- quick User Settings -->
<div>
   
   <!-- QUS Button -->
   <button id="user_quick_menu"
            class="mdl-button
                    mdl-js-button
                    mdl-js-button--icon">
        <!-- Add an Icon to the button -->
        <i class="material-icons">keyboard_arrow_down</i>
   </button>
    <!-- End. QUS Button -->
   
   <!-- dropdown menu -->
   <ul class="mdl-menu
                mdl-menu--bottom-right
                mdl-js-menu
                mdl-js-ripple-effect"
            for="user_quick_menu">
            
      <?php
            // -- Include User Profile dialog -->
            include_once '../User/profileQuickSettings.php';
       
            if(($_SESSION['admin']==0)) // Set to 1 for testing
            {
                // -- Request password reset (if not an admin)
                 $admin = $_SESSION['admin'];
                    echo '<li class="mdl-menu__item">PWD RESET</li>';
                
                    // -- Request Feedback -->
                    echo '<li class="mdl-menu__item mdl-menu__item--full-bleed-divider">FEEDBACK</li>';
            }
       ?>
      
      <!-- About -->
      <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">ABOUT</li>
      
      <!-- Log Off -->
      <a class="mdl-menu__item mdl-color--red" href ="../Database/logout.php">LOG OFF</a>
       
   </ul>
    <!-- End. dropdown menu -->
    
</div>
 <!-- End. quick User Settings -->