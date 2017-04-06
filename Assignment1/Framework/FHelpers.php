<?php

// Globals

define("HTTP_GET", "GET");
define("HTTP_POST", "POST");
define("HTTP_PUT", "PUT");

function error($er)
{
    $model = $er;
    http_response_code($er);
    
    $customErrorPath = "Views/_Shared/Errors/Error" . $er . ".php";
    if (file_exists($customErrorPath)) {
        include_once($customErrorPath);
    } else {
        include_once("Views/_Shared/Errors/Error.php");
    }
    
}

?>