<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 2/22/19
 * Time: 12:05 AM
 */

class App{


    /**
     * App constructor.
     */

    /**
     * @default $contoller is HomeController
     * @default $method is index
     */

    protected $controller = 'HomeController';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $url=$this->parseUrl();
        //print_r($url);

        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller=$url[0];
            unset($url[0]);

        }

        require_once '../app/controllers/' . $this->controller . '.php';

        //echo $this->controller;

        $this->controller = new $this->controller;

        if(isset($url[1])){

            if(method_exists($this->controller,$url[1])){
                //echo 'ok';
                unset($url[1]);
            }

        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller,$this->method],$this->params);

    }

    /**
     * @parseUrl splits the url and enter the data into an array and return it
     * @return array
     */

    public function parseUrl(){

        if(isset($_GET['url'])){

            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }




    }
}