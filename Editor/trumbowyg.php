<!-- 
    Contains Initialising the tumbowg editor, handling saving the data
-->

<!-- Import Jquerry -->
<?php include "../Include/importJQuerryAjax.php"; ?>

<!-- Import Trumbowyg CSS-->
<link rel="stylesheet" href="../../Assets/Trumbowyg-master/dist/ui/trumbowyg.min.css">

<!-- Colours Plugin -->
<link rel="stylesheet" href="../../Assets/Trumbowyg-master/dist/plugins/colors/ui/trumbowyg.colors.min.css">

<!-- Import Trumbowyg JS-->
<script 
    type='text/javascript' src='../../Assets/Trumbowyg-master/dist/trumbowyg.min.js'>
</script>

<!-- Colours Plugin -->
<script 
    type='text/javascript' src='../../Assets/Trumbowyg-master/dist/plugins/colors/trumbowyg.colors.min.js'>
</script>
     

<!-- Main trumbowyg Script -->
<script>
    
    $egg = "";
    
    // Init the editor
    function trumb(){
        $('#editor').trumbowyg({
            btns: [
                    ['undo', 'redo'], // Only supported in Blink browsers
                    ['formatting'],
                    ['strong', 'em', 'del', 'removeformat'],
                    ['foreColor', 'backColor'],
                    ['superscript', 'subscript'],
                    ['link'],
                    ['insertImage'],
                    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ['unorderedList', 'orderedList'],
                    ['horizontalRule'],
                    ['fullscreen']
                  ],
            autogrow: true

        });
    }
    
    // Test Script
    function geteditor()
    {
        $chicken = $('#editor').trumbowyg('html');
        $egg = document.getElementById("data");
        $egg.innerHTML = $chicken;
    }
    
</script>
