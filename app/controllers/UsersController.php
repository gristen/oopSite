<?php

namespace app\controllers;


use app\Models\Users\UsersModel;

class UsersController extends Controller
{

    public function index_register()
    {
        $this->view->generate("register.php");
        $Model = new UsersModel();
        $da = $Model->sign($_POST,$_FILES);
        var_dump($da);
    }


    public  function signUP()
    {
        echo "отправил";

    }



}
