<?php

namespace App\Controller;

use App\Config;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;
use Twig\Environment;
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

        $twig = new Environment($loader, [
            'cache' => CACHE,
            'debug' => Config::getValue('debug'),
        ]);
        $twig->addGlobal('home', basename(ROOT));
        $twig->addGlobal('global_assets', basename(ROOT).'/assets');

        if(Config::getValue('debug')) $twig->addExtension(new DebugExtension());

        return $twig;
    }

    protected function render(array $context = [])
    {
        if (!$this->template) throw new Exception('Twig template is not set.');
        echo $this->twig->load($this->template)->render($context);
    }
}
