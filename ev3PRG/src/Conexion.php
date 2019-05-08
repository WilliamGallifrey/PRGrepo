<?php 

class Conexion {
    private $user = 'root';
    private $pass = '';
    private $db = 'proyectos';
    private $server = 'localhost';
    private $conexion;

    public function __construct()
    {
        
    }

    public function connect()
    {
        $mysqli = new mysqli($this->server, $this->user, $this->pass, $this->db);
        if ($mysqli->connect_errno) {
            return false;
        }
        else 
            $this->conexion = $mysqli;
            return $mysqli;
    }   
    
}

?>