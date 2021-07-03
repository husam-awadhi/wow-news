<?php

namespace App\Controller;

use App\Config;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Model\Model;
use Exception;

abstract class AbstractController
{
    protected Environment $twig;
    protected $model;
    protected string $template = '';

    public function __construct()
    {
        $this->twig = $this->getTwig();
    }

    protected function getTwig()
    {
        $loader = new FilesystemLoader(ROOT . '/views');

        return new Environment($loader, [
            'cache' => CACHE,
            'debug' => Config::getValue('debug'),
        ]);
    }

    protected function render(array $context = [])
    {
        if (!$this->template) throw new Exception('Twig template is not set.');
        echo $this->twig->load($this->template)->render($context);
    }
}
