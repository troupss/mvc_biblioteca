<?php 
require_once 'ModelBase.php';

class prestecs extends ModelBase{
    public $codi;
    public $ISBN;
    public $DNI;
    public $dataPrestec;
    public $dataRetorn;
    public $retornat;

    public function __construct(){
        parent::__construct();
    }

    public function getCodi()
    {
        return $this->codi;
    }

    public function setCodi($codi)
    {
        $this->codi = $codi;

        return $this;
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

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setDNI($DNI)
    {
        $this->DNI = $DNI;

        return $this;
    }

    public function getDataPrestec()
    {
        return $this->dataPrestec;
    }

    public function setDataPrestec($dataPrestec)
    {
        $this->dataPrestec = $dataPrestec;

        return $this;
    }

    public function getDataRetorn()
    {
        return $this->dataRetorn;
    }

    public function setDataRetorn($dataRetorn)
    {
        $this->dataRetorn = $dataRetorn;

        return $this;
    }

    public function getRetornat()
    {
        return $this->retornat;
    }

    public function setRetornat($retornat)
    {
        $this->retornat = $retornat;

        return $this;
    }

    public function retornarPrestec(){
        $sql = "UPDATE prestec SET retornat = 1 WHERE codi = {$this->codi}";
        $guardat = $this->db->query($sql);

        return $guardat;
    }

    public function insertar(){
        $fechaPrestec = date('Y-m-d');
    
        $fechaRetorn = date('Y-m-d', strtotime($fechaPrestec . ' +1 month'));
    
        $sql = "INSERT INTO prestec (ISBN, DNI, data_prestec, data_retorn) VALUES ('{$this->ISBN}', '{$this->DNI}', '{$fechaPrestec}', '{$fechaRetorn}')";
    
        $guardat = $this->db->query($sql);
    
        return $guardat;
    }
    

}