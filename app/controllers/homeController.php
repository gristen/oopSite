<?php

namespace app\controllers;

use app\Services\DB;

class homeController extends Controller
{


    public function action()
    {
       // $articles = $this->db->query("SELECT * FROM articles");

        $this->view->generate("home.php");
       // var_dump($articles);
    }
}