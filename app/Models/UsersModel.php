<?php

namespace app\Models;

use app\controllers\UsersController;
use app\Services\App;

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

        }elseif(self::CheckEmailUser($userData['email']))
        {
            $Message = ["key"=>"error","value"=>"Данный емайл уже зарегестрирован."];

        }elseif (self::CheckEmailValidate($userData['email']) === false)
        {
            $Message = ["key"=>"error","value"=>"Некорректный Емайл."];
        }

        if (!empty($Message))
            echo json_encode($Message);
        else
        {
            echo "отправил";
            self::InsertUser($userData['email'],$userData['username'],$userData['password'],$userAvatar['avatar']['name'],1);
        }

    }

    private static function CheckEmailUser(string $email): int
    {
        $db =  App::connect();
        $result = $db->prepare("SELECT email FROM users WHERE email = :email");
        $result->execute([
            "email"=>$email,
        ]);
        return $result->rowCount();
    }
    public static function CheckEmailValidate($email)
    {
      return filter_var($email,FILTER_VALIDATE_EMAIL);
    }

    private static function InsertUser($email, $username, $password, $avatar, $status)
    {
        $db =  App::connect();
        $query = $db->prepare("INSERT INTO users (email,username,password,avatar,role) VALUES (:email,:username,:password,:avatar,:status)");
        $query->execute([
            "email"=>$email,
            "username"=>$username,
            "password"=>password_hash($password,PASSWORD_DEFAULT),
            "avatar"=>$avatar,
            "status"=>$status,
        ]);

    }

}