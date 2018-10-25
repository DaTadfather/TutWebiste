<!-- 
    global php, used to disable a button until all fields in a form are entered 
-->

<!-- Incudes Session Start -->
<?php 
    include_once '../Database/sessionStart.php';
    include_once '../Include/importJQuerryAjax.php'; 

?>

<!-- Disable Script -->
<script>

    // set the input variable to look out for email and password input fields
    var $input = $('input[type=email],input[type=password]');
    
    // empty register field
    // declaired global so it can be accessed later
    var $regsiter;
    
    $(document).ready(function(){
        
        // disable the submit button on document ready
        $regsiter = $('#submitBtn').attr('disabled', 'disabled');
    });
    
    // If a key has been pressed and released
    $input.keyup(function()
    {
        // set the trigger value to false;
        var trigger = false;
        
        // for each input field in the active form
        $input.each(function()
        {
            
            // if the input field is empty, set the trigger value to true
            if(!$(this).val())
            {
                trigger = true;    
            }    
        });
        
        // if trigger = true then keep the button disabled, else removed the disabled attribute
        trigger ? $regsiter.attr('disabled', true) : $regsiter.removeAttr('disabled');
    });
    

</script>
