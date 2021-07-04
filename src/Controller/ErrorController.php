<?php


namespace App\Controller;


class ErrorController extends AbstractController
{
    protected $model;
    protected string $template = 'error.twig';

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction($id = "", $idparent = "", $event = "")
    {
        $this->render();
    }
}
