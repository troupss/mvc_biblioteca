<?php
require_once "model/prestecs.php";
require_once "model/ModelBase.php";

class prestecsController
{
    public function mostrar_tots_els_prestecs(){
        $prestec = new prestecs();
        $prestecs = $prestec->mostrar_tot("prestec");

        require_once "views/prestecs/mostrarPrestecs.php";
    }
    public function retornarPrestec(){
        $codi = $_GET['codi'];
        $prestec = new prestecs();
        $prestec->setCodi($codi);

        $prestec->retornarPrestec("prestec");

        header("Location:index.php?controller=prestecs&action=mostrar_tots_els_prestecs");
    }
    public function afegir(){
        require_once "views/prestecs/afegirPrestec.php";
    }

    public function afegirPrestecs(){
        if(isset($_POST['submit'])){
            $prestec = new prestecs();
            $prestec->setISBN($_POST['isbnLlibre']);
            $prestec->setDNI($_POST['dniUsuari']);

            $prestec->insertar("prestec");

            header("Location:index.php?controller=prestecs&action=mostrar_tots_els_prestecs");
        }
    }
}