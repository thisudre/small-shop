<?php

namespace SmallShop\Models;

class Pedido  
{
    private $numero;
    private $produtos;
    private $cliente;
    private $estado;
    public static $estados = [
        'novo',
        'preparo',
        'enviado',
        'concluido'
    ];

    public function __construct(string $numero, Produto $produto, Cliente $cliente)
    {
        $this->numero = $numero;
        $this->produtos = $produto;
        $this->cliente = $cliente;
        $this->estado = 0;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function getProdutos()
    {
        return $this->produtos;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    public function getEstado()
    {
        return Pedido::$estados[$this->estado];
    }
    public function avancarEstado()
    {
        if ($this->estado == 3) {
            return;
        }
        $this->estado++;
    }
}
