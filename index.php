<?php

require_once 'vendor/autoload.php';

use \SmallShop\Infrastructure\DatabaseConnection;

$connection = DatabaseConnection::connectDatabase();

$connection->exec("CREATE TABLE teste(id PRIMARY KEY INTEGER, teste TEXT)");