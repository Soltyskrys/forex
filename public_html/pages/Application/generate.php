<?php

$pathToRoot = $_SERVER['DOCUMENT_ROOT'];
$config = require_once($pathToRoot.'/resources/config.php');



$scriptPath = $config['paths']['resources'].'/applicationScript/script.py';

//make legal path on Windows
$scriptPath = str_replace('/', '\\', $scriptPath);

$scriptArg1 = $_POST["arg1"];

// executing script in cmd
// komenda python| podanie ścieżki do skryptu| podanie argumentów w formie stringu

$cmd = "python $scriptPath \"$scriptArg1\" \"argument dodany z PHP\"  ";
$result = shell_exec($cmd);

echo $result;


?>