<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];
$config = require_once($pathToRoot.'/resources/config.php');

require_once($config['paths']['templates'].'/pages/informationPage.php');

class ApplicationPage extends Page
{
    function __construct($aConfig)
    {
        parent::__construct($aConfig);
    }
    
    
         function Show()
     {
         echo '<!DOCTYPE html>'."\n";
         echo "<html>\n<head>\n";
         $this->showTitle();
         $this->showKeyWords();
         $this->showBasicStyles();
         $this->showJQuery();
         $this->showBootstrap();
 
         $this->showBootstrapJS();
         echo "</head>\n<body>\n";
         $this->showMenu();
         $this->showJumbotron();
         include('application.html');
         $this->showFooter();
         // add script responsible for application part
         $this->showApplicationScripts();

         echo '</body>'."\n".'</html>'."\n";
     }
    
    function showApplicationScripts()
    {
         echo '<script src="'.$this->config['paths']['js'].'/application/IndicatorController.js"></script>'."\n";
        echo '<script src="'.$this->config['paths']['js'].'/application/IndicatorPropertyController.js"></script>'."\n";
        echo '<script src="'.$this->config['paths']['js'].'/application/IndicatorsController.js"></script>'."\n";
        echo '<script src="'.$this->config['paths']['js'].'/application/StrategyController.js"></script>'."\n";
        echo '<script src="'.$this->config['paths']['js'].'/application/ApplicationController.js"></script>'."\n";
    }
    

    
}


$page = new ApplicationPage($config);
$page->title = "Application";
$page->Show();




?>