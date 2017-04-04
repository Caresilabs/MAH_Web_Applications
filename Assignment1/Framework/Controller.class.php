<?php

class Controller
{
    private $baseName;
    private $actionName;

    public function __construct($name)
    {
     
        $this->baseName = $name;

        $this->actionName = "index";
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            //$this->{$_GET['action']}();
            $this->actionName = $_GET['action'];
        }

        $params = (array)$_GET;
        unset($params['action']);
        call_user_func_array(array($this, $this->actionName), $params);
    }

    protected function view($model = null)
    {
        require_once("Views/" . $this->baseName . "/" . ucfirst($this->actionName) . "View.php");
    }
}

?>