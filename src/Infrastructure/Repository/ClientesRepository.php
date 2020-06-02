<?php

namespace SmallShop\Infrastructure\Repository;

use PDO;
use SmallShop\Domain\Models\Cliente;

class ClientesRepository
{
    public function getClientes(PDO $pdo): array{
        $statement = $pdo->query("SELECT * FROM clientes");
        $clientes = $statement->fetchAll(PDO::FETCH_ASSOC);
        $listaClientes = [];
        foreach ($clientes as $cliente) {
            $listaClientes[] = new Cliente($cliente["idCliente"], $cliente["nome"], $cliente["email"], $cliente["celular"]);
        }

        return $listaClientes;
    }
    public function saveCliente(PDO $pdo, Cliente $cliente): bool{
        $sqlInsertCliente = "INSERT INTO `clientes` (idCliente, nome, email, celular) VALUES (null, ?, ?, ?);";

        $statement = $pdo->prepare($sqlInsertCliente);
        $statement->bindValue(1, $cliente->getNome());
        $statement->bindValue(2, $cliente->getEmail());
        $statement->bindValue(3, $cliente->getCelular());

        if ($statement->execute()) {
            $cliente->setId($pdo->lastInsertId());
            return true;
        }
        return false;
    }

    public function removeCliente(PDO $pdo, Cliente $cliente): bool{
        $sqlRemoveCliente = "DELETE FROM `clientes` WHERE idCliente = (?)";
        $statement = $pdo->prepare($sqlRemoveCliente);
        $statement->bindValue(1, $cliente->getId);

        if ($statement->execute()) {
            return true;
        }
        return false;
    }
}
