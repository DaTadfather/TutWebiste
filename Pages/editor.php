<!-- 
    Tutorial Submission Page
-->

<!-- Session Start include, before anything else-->
<?php include_once '../Database/sessionStart.php'; ?>

<!-- Doc Start -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editor</title>
    
    <!-- imports and includes -->
    <!--link rel="stylesheet" href="../Include/robotoFont.php"-->
    <link rel="import" href="../Include/importMDL.html">
    <link rel="stylesheet" href="../CSS/globalCSS.css">
    
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
        
        //-- Scrol Indicator Include -->
        include_once '../Include/scrollUpIndicator.php';
        ?>
                   
        <!-- Layout Content Container -->
        <main class="mdl-layout__content">
            
            <!-- Page Content, goes in here -->
            <div class="page-content">
              
              <h3 class="g_centerAlign">Contribute</h3>
               
               <?php include_once '../Editor/editorContainer.php'; ?>
                
            </div>
             <!-- End. Page Content-->
            
        </main>
         <!-- End. Layout Content -->
                                                           
    </div>  
     <!-- End. Page Layout -->
      
</body>

</html>