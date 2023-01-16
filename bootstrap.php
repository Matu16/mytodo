<?php


$config = require_once('config.php');
require_once('database/connection.php');
require_once('database/QueryBuilder.php');


return new QueryBuilder(
    Connection::make($config['database'])
);