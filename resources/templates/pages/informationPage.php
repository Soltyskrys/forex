<?php

require_once($config['paths']['templates'].'/pages/page.php');




class InformationPage extends Page
{

    var $content;
    
    function __construct($aConfig)
    {
        parent::__construct($aConfig);
    }
    

     function Show()
     {
         echo '<!DOCTYPE html>'."\n";
         echo '<html>'."\n".'<head>'."\n";
         $this->showTitle();
         $this->showKeyWords();
         $this->showBasicStyles();
         $this->showBootstrap();
         $this->showJQuery();
         $this->showBootstrapJS();
         echo '</head>'."\n".'<body>'."\n";
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