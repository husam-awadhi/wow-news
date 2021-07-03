<?php


namespace App\Controller;

use App\Model\Home;


class HomeController extends AbstractController
{    
    protected $model;
    protected string $template = 'home/home.twig';

    public function __construct()
    {
        parent::__construct();
        $this->model = new Home();
    }

    public function indexAction($id = "", $idparent = "", $event = "")
    {
        $this->render($this->model->getWhere());
    }
}
