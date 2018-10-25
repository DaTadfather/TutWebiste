<!-- 
    Contains a list of all the pages on the website
-->

<?php
    
    $homePage = "../Pages/home.php";
    $tempPage = "../Pages/learn.php";
    $adminPage ="../Pages/admin.php";
    $editorPage = "../Pages/editor.php";
    /*$contributePage = "../Contribute/contribute.php";*/

   
    $title = "Alpha 0.1";

    echo '<a class="mdl-navigation__link" href="' . $homePage . '">HOME</a>';

    echo '<a class="mdl-navigation__link" href="' . $tempPage . '">LEARN</a>';

if(($_SESSION['contribute']) == 1)
    {
        $editor = $_SESSION['contribute'];

        if($editor)
        {
            echo '<a class="mdl-navigation__link" href="' . $editorPage . '">CONTRIBUTE</a>';
        }
        /*$contribute = $_SESSION['contribute'];*/
    }


 if(($_SESSION['admin']) == 1)
    {
        $admin = $_SESSION['admin'];

        if($admin)
        {
            echo '<a class="mdl-navigation__link" href="' . $adminPage . '">ADMIN</a>';
        }
        /*$contribute = $_SESSION['contribute'];*/
    }

?>