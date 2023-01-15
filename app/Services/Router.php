<?php

namespace app\Services;

class Router
{
    private static $list = [];

    public static function page($uri, $pagename)
    {
        self::$list[] = [
            "url" => $uri,
            "page" => $pagename
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

                if ($route["post" ]=== true && $_SERVER["REQUEST_METHOD"] === "POST")
                {

                    $action = new $route['class'];
                    $method = $route['method'];
                    if ($route["formdata"] && $route["files"])
                    {
                        $action->$method($_POST,$_FILES);

                    }elseif ($route["formdata"] && !$route["files"])
                    {
                        $action->$method($_POST);

                    }elseif (!$route["formdata"] && !$route["files"])
                    {

                        $action->$method();

                    }
                    die();
                }else
                {
                    require_once "views/pages/" . $route['page'] . ".php";
                    die();
                }

            }


        }
//        self::not_found_page();
    }

}



