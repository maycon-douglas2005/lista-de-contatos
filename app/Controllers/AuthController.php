<?php
require '../Models/Usuario.php';


class AuthController
{
    private function criarObjetoUsuario()
    {
        $n = $_POST['name'];
        $e = $_POST['email'];
        $s = $_POST['password'];
        return $User = new Usuario($n, $e, $s);
    }
}
