<?php

$query = require_once('bootstrap.php');
$tasks = $query->selectAll('tasks');

require_once('index.view.php');