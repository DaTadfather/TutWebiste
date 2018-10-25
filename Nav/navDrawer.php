<!--
    Create a global side Nav Drawer
-->

<!-- Side Menu Drawer -->
<div class="mdl-layout__drawer" style="text-align:center; margin:auto;">

    <!-- Title -->
    <span class="mdl-layout-title" style="padding-left:0%;">Title</span>

    <!-- Avatar Image -->
    <?php include_once '../Include/profileImage.php'; ?>
     <!-- End. Avatar Image -->

     <!-- Navigation -->  
    <nav class="mdl-navigation">
        <!-- Menu Import -->
        <?php include '../Nav/menu.php';?>
    </nav>
     <!-- End. Navigation -->
    
    <!-- Logoff Button -->
    <button class="mdl-button
                   mdl-button--raised
                    mdl-js-ripple-effect
                    mdl-button--accent"
            type="submit"
            form="logout"
            >LOG OFF
    </button>
     <!-- End. logoff Button -->
           
    <!-- Redirect to logout page -->
    <form action="../Database/logout.php"
           method="post"
           name="loutout"
           id="logout">
    </form>
     <!-- End. Redirect page -->
            
</div>
 <!-- End. Side Menu Drawer -->