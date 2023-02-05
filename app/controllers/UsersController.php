<?php

namespace app\controllers;


use app\Models\Users\UsersModel;

class UsersController extends Controller
{

    public function index_register()
    {
        $this->view->generate("register.php");
    }


    public  function signUP()
    {
        echo "отправил";
        $Model = new UsersModel();
        $da = $Model->sign($_POST,$_FILES);
       var_dump($da);
    }



}
