<?php

namespace SmallShop\Domain\Repository;

interface PedidosRepository
{
    public function getPedidos(): array;
    public function savePedido(): bool;
    public function updatePedido(): bool;
    public function removePedido(): bool;
}