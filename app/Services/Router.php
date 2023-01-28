<?php

namespace app\Services;

use app\controllers\homeController;
use app\controllers\loginController;

class Router
{
    private static $list = [];

    public static function page($uri, $pagename, $class,$method)
    {
        self::$list[] = [
            "url" => $uri,
            "page" => $pagename,
            "class"=>$class,
            "method"=>$method,
        ];

    }

    public static function post($uri, $class, $method, $formdata = false, $files = false)
    {
        self::$list[] = [
            "url" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "formdata" => $formdata,
            "files" => $files,
        ];
    }

    public static function redirect($uri)
    {
       header('Location:'.$uri);
    }

    private static function not_found_page()
    {
        require_once "views/error/404.php";
    }

    public static function enable()
    {

        $q = $_GET["q"];


        foreach (self::$list as $route)
        {

            if ($route['url'] === '/' . $q)
            {
                    $action = new $route["class"];
                    $method = $route["method"];
                    $action->$method();

                    die();

            }





        }

    }
/*    public  static  function start()
    {
        $controller_names = 'loginController.php';
        $action_name = 'action_index';
        $q = $_GET["q"];
        foreach (self::$list as $route) {
            $controller_name = $route['page'];
            $controller_path = "app/controllers/" . $controller_name . 'Controller.php';
            if (file_exists($controller_path)) {

                $controller = new $controller_names;
                $action = $action_name;
                $controller->$action();
            }else{
                self::not_found_page();
            }

        }
    }*/

}



