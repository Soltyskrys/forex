<?php


require("./templates/pages/informationPage.inc");

class HomePage extends informationPage
{
   function __construct()
   {
       $this->title = "Home Page";
       $this->keyWords = "forex,finance,script";

   }
}
$page = new HomePage();
$page->show();

?>