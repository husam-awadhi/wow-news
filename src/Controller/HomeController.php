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

        $greeting = (date('H') >= 0 && date('H') < 12 ? 'Morning' : 'Evening');

        $this->render(['posts' => $this->model->getWhere(), 'greeting' => "Good {$greeting}!"]);
    }
}
