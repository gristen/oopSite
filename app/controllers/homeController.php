<?php

namespace app\controllers;



use app\Services\DB;

class homeController extends Controller
{


    public function action()
    {
        /*$db =  DB::connect();
        $q = $db->prepare("SELECT * FROM Film");
        $q->execute();*/
       // $films = $q->fetchAll(PDO::FETCH_ASSOC);
      //  var_dump($films);

        $this->view->generate("home.php");


    }
}