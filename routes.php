<?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('about/culture', 'PagesController@about_culture');
    $router->get('contact', 'PagesController@contact');
    $router->get('work', 'PagesController@work');
    $router->post('task', 'PagesController@add_task');
    
    $router->get('tasks', 'TasksController@index');
    $router->get('news/post', 'newsController@index');

