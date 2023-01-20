<?php

$contacts = $app['database']$query->selectAll('contacts');

require_once('views/contact.view.php');