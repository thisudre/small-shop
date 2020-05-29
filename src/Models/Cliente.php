<?php

namespace SmallShop\Models;

class Cliente
{
    private $nome;
    private $email;
    private $celular;
    static public $quantidadeClientes;

    public function __construct(string $nome, string $email, string $celular)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        Cliente::$quantidadeClientes++;
    }

    public function __destruct()
    {
        Cliente::$quantidadeClientes--;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setCelular(string $celular)
    {
        $this->celular = $celular;
    }
}
