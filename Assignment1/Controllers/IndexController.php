<?php

require_once("Framework/Controller.class.php");
require_once("vendor/mashape/unirest-php/src/Unirest.php");

class IndexController extends Controller
{

   public function index()
   {
        $headers = array('Accept' => 'application/json');
        $response = Unirest\Request::get('http://unicorns.idioti.se/', $headers);

        require_once("Models/ListModel.php");
        $model = new ListModel();
        foreach ($response->body as $key => $value) {
            $model->add($value);
        }

        return parent::view($model);
   }

   public function details($id)
   {
        $headers = array('Accept' => 'application/json');
        $response = Unirest\Request::get('http://unicorns.idioti.se/' . $id, $headers);

        require_once("Models/DetailsModel.php");
        $model = new DetailsModel($response->body->name, $response->body->description, 
            $response->body->image, $response->body->reportedBy,  $response->body->spottedWhen);
        return parent::view($model);
   }
   
}

?>