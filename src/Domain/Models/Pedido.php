<?php

namespace SmallShop\Domain\Models;

use DateTime;

class Pedido  
{
    private $idPedido;
    private $produtos;
    private $cliente;
    private $estado;
    private $dataPedido;
    private $dataConclusao;
    public static $estados = [
        'novo',
        'preparo',
        'enviado',
        'concluido'
    ];

    public function __construct(?int $idPedido, array $produtos, Cliente $cliente)
    {
        $this->idPedido = $idPedido;
        $this->produtos = $produtos;
        $this->cliente = $cliente;
        $this->dataPedido = new DateTime();
        $this->dataConclusao = null;
        $this->estado = 0;
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
    public function getId(): int
    {
        return $this->idPedido;
    }
    public function setId(?int $idPedido): void
    {
        if ($this->idPedido == null) {
            $this->$idPedido = $idPedido;
        }
    }
    public function avancarEstado()
    {
        if ($this->estado == 3) {
            return;
        }
        elseif($this->estado + 1 == 3){
            $this->dataConclusao = new DateTime();
        }
        $this->estado++;
    }
}
