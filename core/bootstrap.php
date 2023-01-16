<?php


$config = require_once('config.php');

require_once('core/Router.php');
require_once('core/database/connection.php');
require_once('core/database/QueryBuilder.php');


return new QueryBuilder(
    Connection::make($config['database'])
);