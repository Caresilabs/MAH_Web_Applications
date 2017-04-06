<?php

class Controller
{
    private $baseName;
    private $actionName;
    
    public  $method;
    
    public function __construct($name, $action)
    {
        $this->baseName = $name;
        $this->actionName = $action;
        $this->method = $_SERVER["REQUEST_METHOD"];
        
        // INIT
        if (method_exists($this, "init")) {
            $this->init();
        }
        
        // CALL
        $params = null; //(array)$_GET;
        if ($this->method == HTTP_GET) {
            $params = (array)$_GET;
        } else if ($this->method == HTTP_POST) {
            $params = (array)$_POST;
        } else if ($this->method == HTTP_PUT) {
            $params = (array)$_PUT;
        }
        
        if (method_exists($this, $this->actionName)) {
            $p = (new ReflectionMethod($this, $action))->getParameters();
            
            $newParams = array();
            foreach ($p as $param) {
                if (array_key_exists($param->getName(), $params )) {
                    $newParams[] = $params[$param->getName()];
                } else if ($param->isOptional()) {
                    $newParams[] = $param->getDefaultValue();
                }
            }
            
            if (count($newParams) == count($p))
                call_user_func_array(array($this, $this->actionName), $newParams);
            else
                return $this->error(404);
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
        error($er);
    }

    protected function isMethod($method)
    {
        return $this->method == $method;
    }
}

?>