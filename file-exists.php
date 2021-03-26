<?php
namespace Grav\Plugin;
use \Grav\Common\Plugin;
class FileExistsPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/twig/FileExistsTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new FileExistsTwigExtension());
    }
}