<!--
    Accordion. 
-->

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>


 <style>
.collapsible {

}

.collapsible:after {
    font-weight: bold;
    float: right;
}

.content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>