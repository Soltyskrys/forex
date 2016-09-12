<?php

/*
It's contain basics function of sending html tags 
All pages should inherit from this page.
*/

abstract class Page
{
    var $keyWords; // "keywords1,keywords2,keywords3,..."
    var $title;
    var $config;

    function __construct($aConfig)
    {
        $this->config = $aConfig;
    }
    
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
        echo '<meta name="Keywords" '; 
        echo 'content="'.$this->keyWords.'"/>'."\n";
        }
    }
    
    function showBasicStyles()
    {
        echo '<link rel="stylesheet" href="'.$this->config['paths']['main.css'].'" class="stylesheet"/>'."\n";
    }
        function showBootstrap()
    {
        echo '<link rel="stylesheet" href="'.$this->config['paths']['bootstrap.css'].'" class="stylesheet"/>'."\n";
    }
    
    function showBootstrapJS()
    {
          echo '<script src="'.$this->config['paths']['bootstrap.js'].'"></script>'."\n";
    }
    
    function showJQuery()
    {
        echo '<script src="'.$this->config['paths']['jQuery.js'].'"></script>'."\n";
    }
    
    function showMenu()
    {
        require($this->config['paths']['templates'].'/menu/menu.php');
    }
    
    function showFooter()
    {
        require($this->config['paths']['templates'].'/footer/footer.php');
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