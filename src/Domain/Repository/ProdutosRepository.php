<?php

namespace SmallShop\Domain\Repository;

interface ProdutosRepository
{
    public function getClients(): array;
    public function saveProduto(): bool;
    public function updateProduto(): bool;
    public function removeProduto(): bool;
}