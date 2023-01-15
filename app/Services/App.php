<?php

namespace app\Services;

class App
{
    public static function connect()
    {
        $user = "mysql";
        $pass = "mysql";

      return new \PDO('mysql:host=127.0.0.1;dbname=authOOP', $user, $pass);
    }



}