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
    public static $qtdPedidos = 0;

    public function __construct(string $numero, Produto $produto, Cliente $cliente)
    {
        $this->numero = Pedido::$qtdPedidos;
        $this->produtos = $produto;
        $this->cliente = $cliente;
        $this->estado = 0;

        Pedido::$qtdPedidos++;
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
