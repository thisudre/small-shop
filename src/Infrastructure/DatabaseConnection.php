<?php

namespace SmallShop\Infrastructure;

use PDO;

class DatabaseConnection  
{
    public static function connectDatabase(): PDO
    {
        $pdo = new PDO("sqlite:" . __DIR__ . "/../../database.sqlite");
        var_dump($pdo);
        return $pdo;
    }
}
