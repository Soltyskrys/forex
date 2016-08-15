<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];

require_once($pathToRoot."/templates/pages/page.php");
require_once($pathToRoot."/templates/menu/menu.php");
require_once($pathToRoot."/templates/footer/footer.php");



class InformationPage extends Page
{

    var $content;

     function Show()
     {
         echo '<!DOCTYPE html>';
         echo '<html><head>';
         $this->showTitle();
         $this->showKeyWords();
         $this->showBasicStyles();
         $this->showBootstrap();
         $this->showJQuery();
         $this->showJS();
         echo '</head><body>';
         $this->showMenu();
        $this->showJumbotron();
         ?>
    <div class="container">
        <div class="row">

            <div class="col-md-2" style="border-style:solid; min-height:500px;"></div>
            <div class="col-md-8">
                <?php

             $this->showContent();
             ?>
            </div>
            <div class="col-md-2" style="border-style:solid; min-height:500px;"></div>


        </div>
    </div>

    <?php
         $this->showFooter();
         echo '</body></html>';
     }
    

    function showContent()
    {
        echo $this->content;
    }


    
}


?>