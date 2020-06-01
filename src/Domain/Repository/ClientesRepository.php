<?php

namespace SmallShop\Domain\Repository;

interface ClientesRepository
{
    public function getClientes(): array;
    public function saveCliente(): bool;
    public function updateCliente(): bool;
    public function removeCliente(): bool;
}