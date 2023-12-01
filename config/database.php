<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("localhost","root","","biblioteca");
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}