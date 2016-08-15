<?php
$pathToRoot = $_SERVER['DOCUMENT_ROOT'];
require_once($pathToRoot."/templates/menu/menu.php");
require_once($pathToRoot."/templates/footer/footer.php");

/*
It's contain basics function of sending html tags 
All pages should inherit from this page.
*/

abstract class Page
{
    var $keyWords; // "keywords1,keywords2,keywords3,..."
    var $title;

    var $pathToRoot;
    
    function __construct()
    {
        $this->pathToRoot = $_SERVER['DOCUMENT_ROOT'];
    }
    //Basic stylesheet to all pages
    var $stylesheetPath = "stylesheet.css";
    
    //Baic function to showing content of all page 
    abstract function Show();

    
    function showTitle()
    {
        echo "<title>$this->title</title>\n";
    }
    
    function showKeyWords()
    {
        if(isset($this->keyWords))
        {
        echo '<meta name="Keywords"'; 
        echo 'content="'.$this->keyWords.'"/>';
        }
    }
    
    function showBasicStyles()
    {
        echo '<link rel="stylesheet" href="/templates/pages/stylesheet.css" class="stylesheet"/>
        ';
    }
        function showBootstrap()
    {
           echo '<link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" class="stylesheet" />
           ';
    }
    
    function showJS()
    {
          echo '<script src="/lib//bootstrap/js/bootstrap.min.js"></script>
          ';
    }
    
    function showJQuery()
    {
        echo '<script src="/lib/jQuery/jquery.min.js"/></script>
        ';
    }
    
    function showMenu()
    {
        new Menu();
    }
    
    function showFooter()
    {
        new Footer();
    }
    
    function showJumbotron()
    {
        ?>
    <div class="container" style="max-height:300">
        <div class="jumbotron" id="main_jumbotron">

            <h1>Forex scripters</h1>
            <p>Opis dalszy, pomniejszony</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
    <?php
    }
    
    
    
    

} 

?>