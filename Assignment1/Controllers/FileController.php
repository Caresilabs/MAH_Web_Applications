<?php

require_once("Framework/Controller.php");
require("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class FileController extends Controller
{
    private $log;
    
    public function init()
    {
        // create a log channel
        $this->log = new Logger('serverlog');
        $this->log->pushHandler(new StreamHandler('server.log', Logger::INFO));
    }
    
    public function index($test)
    {
        echo "myfile" . $test;
    }
    
}

?>