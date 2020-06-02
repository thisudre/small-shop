<?php

use SmallShop\Domain\Models\Cliente;
use SmallShop\Infrastructure\DatabaseConnection;
use SmallShop\Infrastructure\Repository\ClientesRepository;

require_once 'vendor/autoload.php';

$pdo = DatabaseConnection::connectDatabase();
$rep = new ClientesRepository();
// $cliente = new Cliente(null, "Vitor Vasconcelos", "vitor@gmail.com", "91929394956");

$list = $rep->getClientes($pdo);

var_dump($list);