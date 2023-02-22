<?php

    $router->get('', 'NewsController@index');
    $router->get('about', 'PagesController@about');
    $router->get('about/culture', 'PagesController@about_culture');
    $router->get('contact', 'PagesController@contact');
    $router->get('work', 'PagesController@work');
    $router->get('tasks', 'TasksController@index');
    $router->get('news/delete/confirm', 'NewsController@deleteConfirm');
    $router->get('news/edit', 'NewsController@edit');
    
    
    $router->post('task', 'PagesController@add_task');
    $router->post('news/post', 'NewsController@post');
    $router->post('news/delete', 'NewsController@delete');
    $router->post('news/edit/post', 'NewsController@editpost');
