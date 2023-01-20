<?php

    require_once('core/bootstrap.php');

    // $router = new Router;

    // require_once('routes.php');
    
    // require_once($router->direct($uri));

    require_once Router::load('routes.php')
        ->direct(Request::uri());