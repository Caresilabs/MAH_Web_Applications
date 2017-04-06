<?php

define('DEBUG', true);

if (DEBUG):
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
endif;


require_once("Views/_Shared/MasterHeader.php");

require_once("Framework/Framework.php");

require_once("Views/_Shared/MasterFooter.php");

?>