<?php
namespace Grav\Plugin;
class FileExistsTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'FileExistsTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('file_exists', [$this, 'fileExists'])
        ];
    }
    public function fileExists($file)
    {
        return file_exists($file);
    }
}