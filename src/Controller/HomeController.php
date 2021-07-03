<?php


namespace App\Controller;




class HomeController extends AbstractController
{
    public function indexAction($id = "", $idparent = "", $event = "")
    {
        $this->render('home/home.twig');
    }
}
