<?php
require 'http://localhost/Projetos%20de%20Programação/lista_de_contatos/config/Database.php';
class Usuario
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function cadastrarUsuario() {}
}
