<?php

return $config = array(
    'paths' => array(
        'resources' => $_SERVER['DOCUMENT_ROOT'].'/resources',
        'templates' => $_SERVER['DOCUMENT_ROOT'].'/resources/templates',
        'library' => $_SERVER['DOCUMENT_ROOT'].'/resources/library',
        
        
        'js' => '/public_html/js',
        'css' => '/public_html/css',
        'main.css' => '/public_html/css/main.css',
        'img' => '/public_html/img',
        
        
        //libraries
        'bootstrap.js' => '/resources/library/bootstrap/js/bootstrap.js',
        //'bootstrap.css' => $_SERVER['DOCUMENT_ROOT'].'/resources/library/bootstrap/css/bootstrap.css',
         'bootstrap.css' => '/resources/library/bootstrap/css/bootstrap.css',
        //'bootstrap.css' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'jQuery.js' => '/resources/library/jQuery/jquery.min.js'
    )
    
);

?>