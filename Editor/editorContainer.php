
<?php 
    //-- Import Trumbowyg -->
    include_once '../Editor/trumbowyg.php'; 

    //-- Import save to DB script -->
    require_once 'saveEditorScript.php';
?>

<!-- Styling Doc -->
<style>
    .mainDiv_class
    {
        background-color: whitesmoke;    
        margin: 1% 10% 5% 10%;
    }
    
    .form_class
    {
          display: flex;
          flex-flow: row wrap;
          align-items: center;
          margin:5% 10% 0 10%;
    }
    
   .title_class
    {
        margin: 10px 25px 5px 0;
    }
    
    .topic_class
    {
        margin: 5px 25px 5px 100px;
    }
    
    .saveBtn_class
    {
        margin-left: 5%;
        margin-bottom: 1%;
        width: 10%;
        height: 10%;
        font-size: 150%;
    }
</style>
<!-- End. Styling Doc -->

<!-- Main Container -->
<div id="mainDiv" class="mainDiv_class">
   
    <!-- Editor form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="editor_Container" autocomplete="off">

          <!-- Heading Container -->  
        <div class="form_class">

           <!-- Title -->
            <h4 class="title_class">Title</h4>

            <!-- Title Textbox -->
            <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input form-control" type="text" name="title" id="title"
                        value="<?php echo $title;?> ">
                <label class="mdl-textfield__label" for="title">Title...</label>
            </div>
            <!-- End. Title Textbox -->
            <!-- End. Title -->

           <!-- Topic -->
            <h4 class="topic_class">Topic</h4>

            <div >
               <select name="topic" id="topic" value="<?php echo $topic;?>">
                    <option value="1">INTRO INTO PROGRAMMING</option>
                    <option value="2">COMPUTER SCIENCE BASICS</option>
                    <option value="3">SCL PROGRAMMING</option>
                    <option value="4">C++ PROGRAMMING</option>
                    <option value="5">ADVANCED C++ PROGRAMMING</option>
                </select>
            </div>

        </div>  
        <!-- End. Heading Container -->       

        <!-- Trumbowyg Editor -->       
        <div class="mainContentEditor" style="margin:0 5% 0 5%;">
           <textarea name="content" id="editor" cols="30" rows="10"></textarea>
        </div>
         <!-- End. Trumowyg Editor -->
         
         <!-- Temp Saving Area -->
<div style="display:none";>
   <textarea name="data" id="data" value="<?php echo $data;?> " cols="30" rows="10"></textarea>
</div>

        <!-- Save Button -->
        <button  type="submit" 
                class="mdl-button 
                       mdl-js-button 
                       mdl-button--accent
                       saveBtn_class"
                 form="editor_Container" 
                 value="submit"
                    id="submitBtn"
              onclick="geteditor()"
              >Save
        </button>
        <!-- End. Save Button -->

    </form>
     <!-- End. Editor Form -->
    
</div>
 <!-- End. Main Container -->



<script>
    trumb();
</script>

