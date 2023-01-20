<?php

    $work = $app['database']->selectAll('work');
    
    require_once('views/work.view.php');