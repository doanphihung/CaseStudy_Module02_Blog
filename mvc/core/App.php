<?php
// Class để điều hướng từ index -> controllers

class App
{
    protected $controller = 'Page';
    protected $action = 'Homepage';
    protected $param = [];

    public function __construct()
    {
        $array = $this->urlProcess();

        // Xử lý Controllers
        if (file_exists("./mvc/controllers/" . $array[0] . ".php")) {
            $this->controller = $array[0];
            unset($array[0]);
        }

        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        // Xử lý action
        if (isset($array[1])) {
            if (method_exists($this->controller, $array[1])) {
                $this->action = $array[1];
            }
            unset($array[1]);
        }


        // Xử lý params
        $this->param = $array ? array_values($array) : [];
        call_user_func_array([$this->controller, $this->action], $this->param);


    }

    // Xử lý URL lấy ra biến $_GET['name_set'];
    function urlProcess()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}
