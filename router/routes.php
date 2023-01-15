<?php
use app\Services\Router;
use app\controllers\Auth;

Router::page("/login",'login');
Router::page("/register",'register');
Router::page("/home",'home');
Router::page("/",'home');

//Router::post('/auth/register',Auth::class,"Controller",true,true);

Router::enable();