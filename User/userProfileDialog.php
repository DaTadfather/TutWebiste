<!-- 
    Login Page, user enters credentials  to access website
-->

<!-- Include avatar image css -->
<link rel="stylesheet" href="../CSS/User.css">


<!--  User Details Dialog -->

<!-- add the background after -->

<!-- User Profile Dialog -->
<dialog class = "mdl-dialog" style="width:25%;" id="userProfileDiag"><!--  mdl-card style="background: url('../assets/md-bgs/bg-003.jpg')"-->

   <!-- Dialog Content -->
    <div class = "mdl-dialog__content" style="text-align:center">
        <!-- Title -->
        <h5>Profile</h5>
         <!-- End. Title -->

        <!-- Profile Image -->
        <div class="mdl-card-media">
            <img class="userProfile "src="../Assets/Avatars/avatar-02.png" alt="user_avatar">
        </div>
         <!-- End. Profile Image -->

        <?php 
        
            include_once '../User/currentUserInfo.php';
            //php include_once '../User/allUserInfo.php';
        ?>
        
    </div>
    <!-- End. Dialog Content -->

    <!-- Dialog Actions -->
    <div class = "mdl-dialog__actions">
       
       <!-- Submit Changes Button -->
        <!--button type = "submit" class = "mdl-button">Submit</button-->

        <!-- close Dialog Button -->
        <button type = "button" class = "mdl-button close">Close</button>
    </div>
    <!-- End. Dialog Actions -->

</dialog>
<!-- End. User Profile Dialog -->
       
<script>
    var profileDialog = document.getElementById('userProfileDiag');    
</script>
        