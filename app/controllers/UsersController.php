<?php

namespace app\controllers;
require_once "../../vendor/autoload.php";
use  app\Models\UsersModel;
use app\Services\App;

if (!empty($_POST))
{
    $test = new UsersController();
    $test->signUP();
}

class UsersController
{

    public function signUP()
    {
        UsersModel::sign($_POST ,$_FILES);
    }



}
