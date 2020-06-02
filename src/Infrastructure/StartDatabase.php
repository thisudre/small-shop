<?php

namespace SmallShop\Infrastructure;

require_once 'DatabaseConnection.php';

$pdo = DatabaseConnection::connectDatabase();

$sqlCreateTableCliente = "CREATE TABLE clientes (idCliente INTEGER PRIMARY KEY, nome TEXT , email TEXT, celular TEXT);";
$sqlCreateTableProduto = "CREATE TABLE produtos (idProduto INTEGER PRIMARY KEY, nome TEXT, valor FLOAT);";
$sqlCreateTablePedido = "CREATE TABLE pedidos (idPedido INTEGER PRIMARY KEY, idCliente INTEGER, estado INTEGER, dataPedido TEXT, dataConclusao TEXT);";
$sqlCreateTableProdutoPedido = "CREATE TABLE pedidos_produtos (idPedido INTEGER NOT NULL, idProduto INTEGER NOT NULL, PRIMARY KEY (idPedido, idProduto));";

$pdo->exec($sqlCreateTableCliente);
$pdo->exec($sqlCreateTableProduto);
$pdo->exec($sqlCreateTablePedido);
$pdo->exec($sqlCreateTableProdutoPedido);