<?php

namespace app\controllers;

include "../../vendor/autoload.php";

use  app\Models\UsersModel;
use app\Services\App;

if (!empty($_POST))
{
    UsersController::signUP();
}


class UsersController
{



    public static function signUP()
    {

        UsersModel::sign($_POST ,$_FILES);
    }



}
