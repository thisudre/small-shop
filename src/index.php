<?php

use SmallShop\Models\Cliente;
use SmallShop\Models\Pedido;
use SmallShop\Models\Produto;

require_once 'Models/Cliente.php';
require_once 'Models/Produto.php';
require_once 'Models/Pedido.php';

$cliente = new Cliente('Thiago', 'teste', '090909');

$produto = new Produto('Camiseta 01', 30,00);

$pedido = new Pedido('001', $produto, $cliente);
$pedido->avancarEstado();
$pedido->avancarEstado();

echo $pedido->getEstado() . PHP_EOL;