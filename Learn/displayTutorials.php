<!--


-->
<?php
    
    // Import the database
    require_once '../Database/dbConfig.php';
    // import jquery and ajax
    include_once '../Include/importJQuerryAjax.php';

?>
    
<!-- Import MDL, for testing -- remove in final build -->
<link rel="import" href="../Include/importMDL.html">


<!-- Sticky Nav Drawer -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
 
     <?php
                //-- Scrol Indicator Include -->
        include_once '../Include/scrollUpIndicator.php';?>
  <!-- Drawer -->
  <div class="mdl-layout__drawer">
    <!-- Title -->
    <span class="mdl-layout-title">
          <a href="" style="text-decoration:none; color:black;">Tutorials</a>
    </span>
       <!-- Main Nav Section -->
        <nav class="mdl-navigation">
        
        <?php include "../Learn/displayDivs.php"; ?>
        
    </nav>
     <!-- End. Main Nav Section -->
  </div>
   <!-- End. Drawer -->

  
  <!-- Main Tutorial Div -->
  <main class="mdl-layout__content">
       
       <!-- Page content -->
        <div class="page-content">
        <!-- Your content goes here -->
        
            <!-- Tutorial Content -->
            <div id="tutorialContent" style="margin:5%;">
               
                <!-- Import the tutrials home page -->
                <?php include_once '../Learn/tutorialHomePage.php'; ?>

            </div>
             <!-- End. Tutorial Content -->

        </div>
        <!-- End. Page Content -->
        
  </main>
  <!-- End. Main Tutorial Div -->
  
  
</div>
 <!-- End Sticky Nav Drawer -->

<!-- Retrieve / Send and Display Data -->
<script type="text/javascript">
     
    // Create tutorial ID variable
     var $tutorialID = "";
    
    // dom function
    function dom(clicked_id)
    {
        // tutorial ID variable to the clicked link
        $tutorialID = clicked_id;
        
        // Send the tutorial ID to the server
        $.post('../Learn/tutorialFromServer.php', {variable: $tutorialID},
              function(data)
              {
                $('#tutorialContent').html(data);
              });
    }
    // End. dom function
    
 </script>
 <!-- End. Retrieve / Send and Display Data --> 
 