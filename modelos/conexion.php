<?php
class Conexion
{

    static public function conectar()
    {
        $link = new PDO("mysql:host=localhost:3309;dbname=4c-jnlr-wedding;", "Soporte", "Naza234pro");
        $link->exec("set names utf8");
        return $link;
    }
}
