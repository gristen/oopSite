<?php

namespace app\controllers;

use app\Services\DB;

class homeController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function action()
    {
        $articles = $this->db->query("SELECT * FROM articles");

        //$this->view->generate("home.php");
        var_dump($articles);
    }
}