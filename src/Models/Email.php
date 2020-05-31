<?php
namespace SmallShop\Models;

class Email  
{
    private $email;

    public function __construct(string $email)
    {
        if ($this->validaEmail($email)) {
            $this->email = $email;
        }
    }

    public function validaEmail(string $email)
    {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            echo "Email inválido";
            exit();
        }
        return true;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
