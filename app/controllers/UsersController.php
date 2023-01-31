<?php

namespace app\controllers;
use app\controllers\Controller;
use  app\Models\UsersModel;
use app\Services\App;



class UsersController extends Controller
{

    public function index_register()
    {
        $this->view->generate("register.php");
    }


    public  function signUP()
    {

     echo "sign";
    }



}
