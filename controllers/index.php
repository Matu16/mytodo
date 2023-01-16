<?php

    $tasks = $query->selectAll('tasks');
    
    require_once('views/index.view.php');