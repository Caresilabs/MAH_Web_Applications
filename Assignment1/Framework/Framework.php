<?php

require("Framework/FHelpers.php");

$urlArgs = array_filter(explode('/', $_SERVER['PHP_SELF'])); //ucfirst(basename($_SERVER['PHP_SELF'], '.php')); //__FILE__

$name = "Home";   // Default Controller
$action = "index"; // Default Action
if (count($urlArgs) > 1)
{
    $name = ucfirst($urlArgs[2]);
    if (count($urlArgs) > 2)
    {
        $action = lcfirst($urlArgs[3]);
    }
}

//if (isset($_GET['controller']) && !empty($_GET['controller'])) {
//    $name = $_GET['controller'];
//}

// Create new Controller
$controllerName = $name . "Controller";
$controllerPath = "Controllers/" . $controllerName . ".php";
if (file_exists($controllerPath)) {
    require_once($controllerPath);
    $controller = new $controllerName($name, $action);
} else {
    // Report page not found
    error(404);
}


?>