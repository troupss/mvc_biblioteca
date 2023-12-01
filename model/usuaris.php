<?php 
require_once 'ModelBase.php';

class usuari extends ModelBase{
    public $DNI;
    public $nom;
    public $telefon;
    public $correu;

    public function __construct(){
        parent::__construct();
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setDNI($DNI)
    {
        $this->DNI = $DNI;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTelefon()
    {
        return $this->telefon;
    }

    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getCorreu()
    {
        return $this->correu;
    }

    public function setCorreu($correu)
    {
        $this->correu = $correu;

        return $this;
    }
}