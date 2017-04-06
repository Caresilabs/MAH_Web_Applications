<?php

require_once("Framework/Controller.class.php");
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
    
    public function index($fag)
    {
        echo "myfile" . $fag;
    }
    

    
}

?>