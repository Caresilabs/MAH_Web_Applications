<?php

require_once("Framework/Controller.php");
require("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class HomeController extends Controller
{
    private $log;
    
    public function init()
    {
        // create a log channel
        $this->log = new Logger('serverlog');
        $this->log->pushHandler(new StreamHandler('server.log', Logger::INFO));
    }
    
    public function index()
    {
        //if (!$this->isMethod(HTTP_GET)) return error(404);

        $headers = array('Accept' => 'application/json');
        $response = Unirest\Request::get('http://unicorns.idioti.se/', $headers);
        
        $this->log->info("Requested info about all unicorns.");
        
        require_once("Models/ListModel.php");
        $model = new ListModel();
        foreach ($response->body as $key => $value) {
            $model->add($value);
        }
        
        return $this->view($model);
    }
    
    public function details($id)
    {
        $headers = array('Accept' => 'application/json');
        $response = Unirest\Request::get('http://unicorns.idioti.se/' . $id, $headers);
        
        if ($response->code != "200") {
            return parent::error($response->code);
        }
        
        require_once("Models/DetailsModel.php");
        $model = new DetailsModel($response->body->name, $response->body->description,
        $response->body->image, $response->body->reportedBy,  $response->body->spottedWhen);
        
        $this->log->info("Requested info about: " . $model->name);
        
        return $this->view($model);
    }
    
}

?>