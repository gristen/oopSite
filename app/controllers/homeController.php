<?php

namespace app\controllers;

class homeController extends Controller
{
    public function action()
    {
        $this->view->generate("home.php");
    }
}