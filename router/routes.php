<?php
use app\Services\Router;
use app\controllers\UsersController;

Router::page("/login",'login');
Router::page("/register",'register');
Router::page("/home",'home');
Router::page("/",'home');

//Router::post('/auth/register',UsersController::class,"Controller",true,true);

Router::enable();