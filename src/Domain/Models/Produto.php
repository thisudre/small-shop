<?php

namespace SmallShop\Domain\Models;

class Produto
{
    private $idProduto;
    private $nome;
    private $valor;

    public function __construct(?int $idProduto, string $nome, float $valor)
    {
        $this->idProduto = $idProduto;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function setValor(float $valor):void
    {
        $this->valor = $valor;
    }

    public function setId(int $idProduto):void
    {
        if ($this->idProduto == null) {
            $this->idProduto = $idProduto;
        }
    }
    public function getId(): int
    {
        return $this->idProduto;
    }
}