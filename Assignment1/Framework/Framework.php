<?php

$name = "Index";    //ucfirst(basename($_SERVER['PHP_SELF'], '.php'));
if (isset($_GET['controller']) && !empty($_GET['controller'])) {
    $name = $_GET['controller'];
}
$controllerName = $name  . "Controller"; //__FILE__

require_once("Controllers/" . $controllerName . '.php');

$controller = new $controllerName($name);

?>