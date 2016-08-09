<?php
class Menu
{
    
    
    public function __construct($user)
    {
     ?>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <a href="#" class="navbar-brand">Brand</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" class="btn btn-default">
                        Sign up
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn-default">
                        Sign in
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    }
    
}
    ?>