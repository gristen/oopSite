<?php
use app\Services\Router;
use app\controllers\UsersController;

Router::page("/home",'home',\app\controllers\homeController::class,"action");
//Router::page("/register",'register',\app\controllers\UsersController::class,"index_register");
Router::page("/login",'login',\app\controllers\UsersController::class,"index_login");
Router::page("/",'home',\app\controllers\homeController::class,"action");
Router::post("/register",\app\controllers\UsersController::class,"signUP");
Router::enable();
