<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];


abstract class Page
{
    protected $keyWords; // "keywords1,keywords2,keywords3,..."
    protected $title;
    protected $stylesheetPath = "pages/stylesheet.css";
    
    abstract function Show();
    abstract function showContent();
    abstract function showFooter();
    
    
    function __construct()
    {
        $this->stylesheetPath = $_SERVER['DOCUMENT_ROOT']."/pages/stylesheet.css";
        
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;
    }
    
    public function getKeyWords()
    {
        return $this->keyWords;
    }
    
    public function setStylesheetPath($stylesheetPath)
    {
        $this->stylesheetPath = $stylesheetPath;
    }
    
    public function getStylesheetPath()
    {
        return $this->stylesheetPath;
    }
    
    
    function showTitle()
    {
        echo "<title>$this->title</title>\n";
    }
    
    function showKeyWords()
    {
        if(isset($this->keyWords))
        {
        echo "<meta name=\"Keywords\""; 
        echo "content=\"$this->keyWords\"/>\n";
        }
    }
    
    function showStyles()
    {
        echo "<link rel=\"stylesheet\" href=\"$this->stylesheetPath\" class=\"stylesheet\">\n";
    }
    
} 

?>