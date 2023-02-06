<?php

namespace app\controllers;


use app\Models\Users\UsersModel;

class UsersController extends Controller
{

    public function index_register()
    {
        $this->view->generate("register.php");
        echo __DIR__ ." <br>";
    }


    public  function signUP()
    {
        echo __DIR__ ." <br>";
        $this->view->generate("register.php");
        echo "отправил";
        $Model = new UsersModel();
        $da = $Model->sign($_POST,$_FILES);
       var_dump($da);
    }



}
