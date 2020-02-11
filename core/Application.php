<?php

class Application {

    protected $action = "index";
    protected $controller = "index";
    protected $params = [];

    function __construct() {
        $arr = $this->urlProcess();

        //xử lí controller
        if (file_exists("./controllers/".$arr[0]."Controller.php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        } else {
            // require_once "./views/error404.php";
        }
        
        require_once "./controllers/".$this->controller."Controller.php";
        $this->controller = new $this->controller;

        //xử lí action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            } else {
                //require page 404 
                // require_once "./views/error404.php";
            }
            unset($arr[1]);
        }

        //Xử lí param
        $this->params = $arr ? array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    function urlProcess() {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }



    // $controllerName = $controller.'Controller';  
    // require_once('controllers/'.$controllerName.'.php');
    // $controller = new $controllerName();
    // $controller->$action();

}

?>