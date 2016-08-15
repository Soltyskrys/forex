<?php
class Menu
{
    var $language;
    var $user;
    var $theme;
    
    public function __construct()
    {
     ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/pages/Home/HomePage.php">Home</a></li>
                    <li><a href="/pages/Application/applicationPage.php">Application</a></li>
                    <li><a href="/pages/About%20Us/">About Us</a></li>
                    <li><a href="/pages/Contact/">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    }
    
    
    public function show()
    {
        
    }
    
}
    ?>