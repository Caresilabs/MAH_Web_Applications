<?php

$name = "Index";   //ucfirst(basename($_SERVER['PHP_SELF'], '.php')); //__FILE__
if (isset($_GET['controller']) && !empty($_GET['controller'])) {
    $name = $_GET['controller'];
}
$controllerName = $name  . "Controller"; 

require_once("Controllers/" . $controllerName . '.php');

$controller = new $controllerName($name);

?>