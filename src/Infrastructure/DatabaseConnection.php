<?php

namespace SmallShop\Infrastructure;

use PDO;

class DatabaseConnection  
{
    public static function connectDatabase()
    {
        return new PDO("sqlite:", __DIR__ . "../../database.sqlite");
    }
}
