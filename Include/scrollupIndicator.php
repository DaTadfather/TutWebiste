<!-- 
    global php, scroll to the top button tthat becomes visable when the user scrolls
-->

<!-- style -->
<style>
    
    #scrollUpBtn
    {
        display: none;
        position: fixed;
        bottom: 30px;
        right:30px;
        z-index: 99;
    }
</style>
 <!-- End. Style -->

<!-- Used for test. Disable during release-->
<!--link rel="import" href="../Include/importMDL.html"-->

<!-- Button -->
<button 
        class="mdl-button 
               mdl-js-button 
               mdl-button--fab
               mdl-button--colored 
               mdl-js-ripple-effect"
               
      onClick="scrollUpFunc()"
          
           id="scrollUpBtn">
           
    <i class="material-icons">expand_less</i>
</button>
 <!-- End. Button -->   
                            
                   
<!-- Scroll Script -->
<script>
    
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction()
    {
        if(document.body.scrollTop > 20 ||
           document.documentElement.scrollTop > 20)            
        {
            document.getElementById("scrollUpBtn").style.display = "block";
        }
            else
        {
            document.getElementById("scrollUpBtn").style.display = "none";
        }
    }
    
    function scrollUpFunc()
    {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
     
</script>
<!-- End. Scroll Script -->


