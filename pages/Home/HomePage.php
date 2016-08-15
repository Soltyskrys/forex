<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];

require_once("$pathToRoot/templates/pages/informationPage.php");

class HomePage extends informationPage
{
   function __construct()
   {
       $this->title = "Home Page";
       $this->keyWords = "forex,finance,script";
       $this->content = "cokolwiek <br/><br/><br/><br/><br/><br/><br/>";
   }
}

$page = new HomePage();
$page->show();


?>