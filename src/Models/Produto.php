<?php

namespace SmallShop\Models;

class Produto
{
    private $nome;
    private $valor;

    public function __construct(string $nome, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }
}