<?php
require_once "model/usuaris.php";
require_once "model/ModelBase.php";

class usuariController
{
    public function mostrar_tots_els_usuaris(){
        $usuari = new usuari();
        $usuaris = $usuari->mostrar_tot("usuari");

        require_once "views/usuaris/mostrarUsuaris.php";
    }
}