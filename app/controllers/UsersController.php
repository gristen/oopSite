<?php

namespace app\controllers;
include_once "Controller.php";
use app\controllers\Controller;
use  app\Models\UsersModel;
use app\Services\App;



class UsersController extends Controller
{

    public function index_register()
    {
        $this->view->generate("register.php");
    }

    public function index_login()
    {
        $this->view->generate("login.php");
    }


    public static function signUP()
    {

        UsersModel::sign($_POST ,$_FILES);
    }



}
