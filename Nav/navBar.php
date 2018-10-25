<!--
    Create a global header nav bar
-->


<!-- Navbar: Waterfall header -->
<header class="mdl-layout__header mdl-layout__header--waterfall">

   <!-- Top Header: Always Visible -->
   <div class="mdl-layout__header-row">
      
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
      <div class="mdl-layout-spacer"></div>
       <!-- End. Title -->
       
       <!-- Expandable search Textfield -->
       <div class="mdl-textfield
                    mdl-js-textfield
                    mdl-textfield--expandable
                    mdl-textfield--floating-label
                    mdl-textfield--align-right">
            
            <!-- Textfield Icon -->         
            <label class="mdl-button
                            mdl-js-button
                            mdl-button--icon"
                    for="waterfall-navbar">           
                <i class="material-icons">search</i>
            </label>
             <!-- End. Icon -->
            
            <!-- Textfield Input Holder -->
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" 
                        type="text"
                        name="ex_text"
                        id  ="waterfall-navbar">
            </div>
             <!-- End. Textfield Holder -->
                       
       </div>
        <!-- End. Search Textfield -->
       
   </div>
    <!-- End. Top Header -->
    
    <!-- Bottom Header, not visible on scroll. Not visible on small screens -->
    <div class="mdl-layout__header-row 
                mdl-layout--large-screen-only">
        
        <div class="mdl-layout-spacer"></div>
            
        <!-- Navigation -->  
        <nav class="mdl-navigation">
            
            <!-- Menu Import -->
            <?php include '../Nav/menu.php';
            
            // remove quick settings if Admin
            if(($_SESSION['admin']) == 1) // set to 1 during testing
            {
                //$admin = $_SESSION['admin'];
                //Quick User Settings Import
                include_once "../Nav/quickUserSettings.php ";  
            }
            ?>
            
        </nav>
         <!-- End. Navigation -->
               
    </div>
     <!-- End. Botom header -->
    
</header>
 <!-- End. Navbar