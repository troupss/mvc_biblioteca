<?php 
require_once 'config/database.php';

class ModelBase{

    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public function mostrar_tot($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
    
}