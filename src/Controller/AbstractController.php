<?php

namespace App\Controller;

use App\Config;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class AbstractController
{
    protected $twig;

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

    protected function render(string $directory = '',array $context = [])
    {
        echo $this->twig->load($directory)->render($context);
    }
}
