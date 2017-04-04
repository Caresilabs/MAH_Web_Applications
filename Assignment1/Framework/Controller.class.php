<?php

class Controller
{
    private $baseName;
    private $actionName;

    public function __construct($name, $action)
    {
        $this->baseName = $name;
        $this->actionName = $action;

        // INIT
        if (method_exists($this, "init")) {
            $this->init();
        }

        // CALL
        $params = (array)$_GET;
        unset($params['action']);
        if (method_exists($this, $this->actionName)) {
            call_user_func_array(array($this, $this->actionName), $params);
        } else {
            return $this->error(404);
        }
    }

    protected function view($model = null)
    {
        require_once("Views/" . $this->baseName . "/" . ucfirst($this->actionName) . "View.php");
    }

    protected function error($er)
    {
        //http_response_code($er); //include_once("Views/_Shared/Errors/Error" . $er . ".php");
        error($er);
    }
}

?>