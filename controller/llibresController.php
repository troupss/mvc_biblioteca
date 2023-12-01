<?php
require_once "model/llibres.php";
require_once "model/ModelBase.php";

class llibresController
{
    public function mostrar_tots_els_llibres(){
        $llibre = new llibres();
        $llibres = $llibre->mostrar_tot("llibre");
        
        require_once "views/llibres/mostrarLlibres.php";
    }

    public function afegir(){
        require_once "views/llibres/afegirLlibre.php";
    }

    public function afegirLlibre(){
        if(isset($_POST['submit'])){
            $llibre = new llibres();
            $llibre->setISBN($_POST['isbnLlibre']);
            $llibre->setTitol($_POST['titolLlibre']);
            $llibre->setCategoria($_POST['categoriaLlibre']);
            $llibre->setPreu($_POST['preuLlibre']);
            $llibre->setEditorial($_POST['editorialLlibre']);
            $llibre->setAutor($_POST['autorLlibre']);

            $llibre->insertar("llibre");
            header("Location:index.php?controller=llibres&action=mostrar_tots_els_llibres");
        }
    }
}