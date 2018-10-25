<!-- 
    catalogue card. Empty card template
-->
   
<style>
    
.programCard
{
    height: 400px;
}
       
/* into to programming card */
.bg_1
{
    background: url('../Assets/md-bgs/bg-037.jpg');
}

/* compuer science basics card */
.bg_2
{
    background: url('../Assets/md-bgs/bg-042.jpg');
}

/* scl programming card */
.bg_3
{
    background: url('../Assets/md-bgs/bg-028.jpg');
}

/* c++ programming card */
.bg_4
{
    background: url('../Assets/md-bgs/bg-013.jpg');
}
    
/* advanced c++ programming card */
.bg_5
{
    background: url('../Assets/md-bgs/bg-003.jpg');
}

</style>
    
<?php 
    // Define the number of tutorials topics you'd like to have
    $numOfTopics = 5;

    // index for i
    $i = 1;

    // Create x cards and fill in the information
    for ($i ; $i <= $numOfTopics; $i++)
    {
        
echo<<<END
    <div class="mdl-cell
                mdl-cell -- 4-col
                mdl-card
                mdl-shadow--4dp
                programCard">

                <!-- Card Title -->
                <div class="mdl-card__title
                            mdl-card--expand
                            mdl-color-text--white
                            bg_$i"
                        id="titleBG_$i">

                    <h2 class="mdl-card__title-text" id="cardTitle_$i"> </h2>
                </div>
                 <!-- End. Card Title -->

                 <!-- Card Supporting Text -->
                 <div class="mdl-card__supporting-text">
                     <p class="cardPadding" id="cardSupportingText_$i"> </p>
                 </div>
                 
                 <!-- End. Card Supporting Text -->

                 <div class="mdl-card__actions
                             mdl-card--border">

                     <button class="mdl-button
                                    mdl-button--accent
                                    mdl-js-button
                                    collapsible">
                        Learn More 
                     </button>

                     <div class="content">
                            <p class="cardPadding" id="cardContent_$i"> </p>
                         <a class="mdl-button
                                   mdl-button--accent
                                   mdl-js-button"
                               id="startBtn_$i">
                                Start       
                         </a>
                     </div>                
                 </div>
            <div class="mdl-card__menu">
                <button class="mdl-button
                               mdl-button--icon
                               mdl-js-button
                               mdl-button--accent
                               mdl-shadow--4dp">
                    <i class="material-icons">play_arrow</i>
                </button>
        </div>
    </div>
END;
        
    }

// Include the different Programming Topics -->

include_once '../Learn/catalogueCardInfo/INTRO_INTO_PROGRAMMING.php';
include_once '../Learn/catalogueCardInfo/SCL_PROGRAMMING.php';
include_once '../Learn/catalogueCardInfo/COMPUTER_SCIENCE_BASICS.php';
include_once '../Learn/catalogueCardInfo/C++_PROGRAMMING.php';
include_once '../Learn/catalogueCardInfo/ADVANCED_C++.php';
 // End. Programming Topics Include -->


// Include Accordion Script. contracts and expands the above cards
include_once '../Scripts/accordion.php'; 

?>

