<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];
require_once($pathToRoot.'/templates/pages/page.php');

class ApplicationPage extends Page
{

         function Show()
     {
         echo '<!DOCTYPE html>'."\n";
         echo "<html>\n<head>\n";
         $this->showTitle();
         $this->showKeyWords();
         $this->showBasicStyles();
         $this->showBootstrap();
         $this->showJQuery();
         $this->showJS();
         echo "</head>\n<body>\n";
         $this->showMenu();
         $this->showJumbotron();
         include($this->pathToRoot.'/templates/application/application.php');
         $this->showFooter();

    
         echo "</body>\n</html>\n";
     }
    
}


$page = new ApplicationPage();
$page->title = "Application";
$page->Show();




?>