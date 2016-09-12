<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];
$config = require_once($pathToRoot.'/resources/config.php');

require_once($config['paths']['templates'].'/pages/informationPage.php');




class HomePage extends informationPage
{
   function __construct($aConfig)
   {
       parent::__construct($aConfig);
       
       $this->title = "Home Page";
       $this->keyWords = "forex,finance,script";
       $this->content = "cokolwiek <br/><br/><br/><br/><br/><br/><br/>";
   }
}

$page = new HomePage($config);
$page->show();


?>