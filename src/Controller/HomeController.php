<?php


namespace App\Controller;




class HomeController extends AbstractController
{
    public function indexAction($id = "", $idparent = "", $event = "")
    {
        echo $id . 'Hi';
    }
}
