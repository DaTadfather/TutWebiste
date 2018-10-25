<!-- 
    Home Page. Landing page when entering website
-->

<!-- Session Start include, before anything else-->
<?php 
    include_once '../Database/sessionStart.php';
    require_once '../Database/dbConfig.php';
    include_once '../Include/importJQuerryAjax.php';
?>


<!-- Doc Start -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Learn</title>
    
    <!-- imports and includes -->
    <!--link rel="stylesheet" href="../Include/robotoFont.php"-->
    <link rel="import" href="../Include/importMDL.html">
    
</head>

<body>

   <!-- Page layout, with a fixed header -->
    <div class="mdl-layout
                mdl-js-layout
                mdl-layout--fixed-header">
                
        <?php
        //-- Nav Bar Import -->
        include_once '../Nav/navBar.php';
        
        //-- Nav Drawer Import-->
        include_once '../Nav/navDrawer.php';
        
        ?>
                   
        <!-- Layout Content Container -->
        <main class="mdl-layout__content" style="overflow:hidden;">
           
           <!-- Page Tabs -->
           <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
               
               <!-- Tab Bar -->
               <div class="mdl-tabs__tab-bar">
                    <a href="#tutorials-panel" class="mdl-tabs__tab is-active">Tutorials</a>
                    <a href="#practice-panel" class="mdl-tabs__tab">Practice</a>
               </div>
               <!-- End. Tabs Bar -->
               
                <!-- Tutorials Panel -->
               <section class="mdl-tabs__panel is-active" id="tutorials-panel">
                    <!--Tutorials Content "page content goes here"-->
                    <div class="page-content" style="background-color:lightgrey">
                        <!--?php include_once "../Learn/tutorials.php";?-->
                        <?php include_once "../Learn/displayTutorials.php"; ?>
                    </div>
                     <!-- End. Tutorials Content -->
               </section>
                <!-- End. Tutorials Panel -->
                
                <!-- Practice Panel -->
               <section class="mdl-tabs__panel" id="practice-panel">
                    <!--Practice Content "page content goes here"-->
                    <div class="page-content">
                        <?php include_once "../Learn/practice.php";?>
                    </div>
                     <!-- End. Tutorials Content -->
               </section>
                <!-- End. Tutorials Panel -->
               
               
           </div>
            <!-- End. Page Tabs -->
            
        </main>
         <!-- End. Layout Content -->
                                                           
    </div>  
     <!-- End. Page Layout -->
      
</body>

</html>