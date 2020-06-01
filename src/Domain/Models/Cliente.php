<?php

namespace SmallShop\Domain\Models;

class Cliente
{
    private $idCliente;
    private $nome;
    private $email;
    private $celular;
    static public $quantidadeClientes;

    public function __construct(?int $idCliente, string $nome, Email $email, string $celular)
    {
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        Cliente::$quantidadeClientes++;
    }

    public function __destruct()
    {
        Cliente::$quantidadeClientes--;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEmail(): Email
    {
        return $this->email;
    }
    public function getCelular(): string
    {
        return $this->celular;
    }
    public function setEmail(string $email): void
    {
        $this->email = new Email($email);
    }
    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }
    public function getId(): int
    {
        return $this->idCliente;
    }
    public function setId(?int $idCliente): void
    {
        if ($this->idCliente==null) {
            $this->idCliente = $idCliente;
        }
    }
}
