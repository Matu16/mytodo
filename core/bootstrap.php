<?php

$app = [];

$app['config'] = require_once('config.php');

require_once('core/Router.php');
require_once('core/Request.php');
require_once('core/database/connection.php');
require_once('core/database/QueryBuilder.php');


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);