<!-- 
    global php, used to launch a dialog pop-up 
-->

<!-- Dialog Script -->
<script>
        
    function dialogScriptTest(tdiag, ydiag){

        if(!tdiag.showModal)
        {
            dialogPolyfill.registerDialog(tdialog);
        }

        ydiag.addEventListener('click', function() 
        {
            tdiag.showModal();
        });

        tdiag.querySelector('.close').addEventListener('click', function()
        {
            tdiag.close();
        });

        tdiag.querySelector('.close').addEventListener('click', function()
        {
            tdiag.close();
        });
    }

</script>