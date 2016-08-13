<?php

require("page.inc");

require_once($pathToRoot."/forex/templates/menu/menu.php");
require_once($pathToRoot."/forex/templates/footer/footer.php");

abstract class InformationPage extends Page
{
    
     function Show()
     {
         echo "<!DOCTYPE html>";
         echo "<html>\n<head>\n";
         $this->showTitle();
         $this->showKeyWords();
         $this->showStyles();
         $this->showBootstrap();
         echo "</head>\n<body>\n";
         $this->showMenu();
        $this->showJumbotron();
         ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php

         $this->showContent();
         ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    <?php
         $this->showFooter();
         $this->showJS();
         $this->showJQuery();
         echo "</body>\n</html>\n";
     }
    
    function showMenu()
    {
        new Menu();
    }
    
    function showFooter()
    {
        new Footer();
    }
    
    function showContent()
    {
        
    }
    
    function showBootstrap()
    {
            $pathToRoot = $_SERVER['DOCUMENT_ROOT'];
           echo" <link rel=\"stylesheet\" href=\"/forex/bootstrap/css/bootstrap.min.css\" class=\"stylesheet\" />\n";
    }
    
    function showJumbotron()
    {
        ?>
        <div class="jumbotron" style="text-align:center; background:crimson;">
            <div class="container">
                <h1>Forex scripters</h1>
                <p>Opis dalszy, pomniejszony</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
        <?php
    }
    
    function showJS()
    {
          echo "<script src=\"/bootstrap/js/bootstrap.min.js\"></script>\n";
    }
    
    function showJQuery()
    {
        echo "<script src=/\"jQuery/jquery.min.js\"></script>\n";
    }
    

    
}


?>