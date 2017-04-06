<?php

// Globals

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