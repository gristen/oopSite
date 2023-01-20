<?php

namespace app\Models;

use app\controllers\UsersController;

class UsersModel
{
    public static function sign(array $userData , array $userAvatar)
    {


        $Message = [];

        if (empty($userData['email'])||empty($userData['username'])||empty($userData['password'])||empty($userData['pass_conf'])||empty($userAvatar['avatar']['name']))
        {
            $Message = ["key"=>"error","value"=>"Нужно заполнить все поля"];

        }elseif (empty($userAvatar['avatar']['name']))
        {
            $Message = ["key"=>"error","value"=>"Выберите аватар"];

        }elseif (mb_strlen($userData['password']) < 5)
        {
            $Message = ["key"=>"error","value"=>"Пароль должен содержать больше 5 символов."];

        }elseif (mb_strlen($userData['email'])<10)
        {
            $Message = ["key"=>"error","value"=>"Емайл должен содержать больше 10 символов."];
        }
        if (!empty($Message))
        {
            echo json_encode($Message);
        }

    }
}