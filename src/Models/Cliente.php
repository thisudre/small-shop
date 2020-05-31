<?php

namespace SmallShop\Models;

class Cliente
{
    private $nome;
    private $email;
    private $celular;
    static public $quantidadeClientes;

    public function __construct(string $nome, Email $email, string $celular)
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

    public function __tostring()
    {
        $string = "Nome: {$this->nome}" . PHP_EOL    . "Email: {$this->email->getEmail()}" . PHP_EOL . "Celular: {$this->celular}";
        return $string;
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
