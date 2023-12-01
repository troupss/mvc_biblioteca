<?php 
require_once 'ModelBase.php';

class llibres extends ModelBase{
    public $ISBN;
    public $titol;
    public $categoria;
    public $preu;
    public $editorial;
    public $autor;

    public function __construct(){
        parent::__construct();
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;

        return $this;
    }

    public function getTitol()
    {
        return $this->titol;
    }

    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getPreu()
    {
        return $this->preu;
    }

    public function setPreu($preu)
    {
        $this->preu = $preu;

        return $this;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function insertar(){
        $sql = "INSERT INTO llibre (ISBN, titol, categoria, preu, editorial, autor) VALUES ('{$this->ISBN}', '{$this->titol}', '{$this->categoria}', '{$this->preu}', '{$this->editorial}', '{$this->autor}')";
        $guardat = $this->db->query($sql);
        return $guardat;
    }
}