<?php

use \app\controllers\HomeController;

return function ($app) {
    $app->get('/', HomeController::class . ':home')->setName('index');
};
