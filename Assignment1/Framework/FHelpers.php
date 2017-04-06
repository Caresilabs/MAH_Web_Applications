<?php

// Globals

function error($er)
{
    http_response_code($er);
    include_once("Views/_Shared/Errors/Error" . $er . ".php");
}

?>