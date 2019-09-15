<?php

namespace App\Controllers;

use Zend\Diactoros\Response\HtmlResponse;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class BaseController {
    
    protected $oTwigEnv;

    public function __construct()
    {
        $oTwigLoader = new FilesystemLoader("../app/views");
        $this->oTwigEnv = new Environment($oTwigLoader, [
            "debug" => true,
            "cache" => false,
        ]);
    }

    public function renderHTML($pathfile, $data = [])
    {
        return new HtmlResponse($this->oTwigEnv->render($pathfile, $data));
    }
}