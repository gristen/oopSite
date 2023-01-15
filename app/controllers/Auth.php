<?php

namespace app\controllers;

use app\Services\App;
use app\Services\Router;
use app\Views\Views;

if ($_POST["test"] === "true") // стринговое тру
{
    $obj = new Auth($_POST);
    $obj->Controller();

}

class Auth
{

    private $email;
    private $username;
    private $pass;
    private $passVer;
    private $avatar;
    private $filename;

    public function __construct(array $data)
    {
        $this->email = $data['email'];
        $this->username = $data['username'];
        $this->pass = $data['pass'];
        $this->passVer = $data['passVer'];
        $this->avatar = $data['avatar'];
        $this->filename = time() . $data['filename'];

    }


    public function Controller()
    {
        /*Проверка данных и передача их в модель*/

        $Message = [];

       if (empty($this->email)||empty($this->username)||empty($this->pass)||empty($this->passVer)||empty($this->avatar))
       {
           $Message = ["key"=>"error","value"=>"Нужно заполнить все поля"];

       }elseif (empty($this->avatar))
       {
           $Message = ["key"=>"error","value"=>"Выберите аватар"];

       }elseif (mb_strlen($this->pass) < 5)
       {
           $Message = ["key"=>"error","value"=>"Пароль должен содержать больше 5 символов."];

       }elseif (mb_strlen($this->email)<10)
       {
           $Message = ["key"=>"error","value"=>"Емайл должен содержать больше 10 символов."];
       }
       if (!empty($Message))
       {
          echo json_encode($Message);
       }


        /*
             if (move_uploaded_file($avatar["tmp_name"], "uploads/avatars/.$filename"))
             {
                $dbh=App::connect();
                 $query = $dbh->prepare('INSERT INTO users (email,username,password,avatar) VALUES (:email,:username,:pass,:avatar)');
                 $user = $query->execute([
                     "email"=>$email,
                     "username"=>$username,
                     "pass"=>$pass,
                     "avatar"=>$filename,
                 ]);
               Router::redirect("/login");
             }
         }*/


    }
}
