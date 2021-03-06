<?php

namespace app\controllers;

class HomeController
{
    protected $container;

    // constructor receives container instance
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function home($request, $response, $args){
        $this->container->get('logger')->info("slim-app '/' route");
        return $this->container->view->render($response, 'hello.html');
    }
}