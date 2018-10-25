<!-- 
    Login Page, user enters credentials  to access website
-->

<!-- Doc Start -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    
    <!-- imports and includes -->
    <link rel="stylesheet" href="../Include/robotoFont.php">
    <link rel="import" href="../Include/importMDL.html">
    <link rel="stylesheet" href="../CSS/globalCSS.css">    
</head>

<body>
   
   <!-- LOGIN FORM PAGE -->
   
   <!-- Title / Header -->
   
   <div class="g_centerAlign">
        <h1>
           Website Alpha 0.2
        </h1>
   </div>

   <!-- Include the content for index.php -->
   
    <?php
    
    // Include Login form --> 
    include_once '../Login/loginCard.php';
     
    // Include Forgot Password Button & Form -->
    include_once '../Login/forgotPwdCard.php';
    
    ?>
       
</body>


</html>