<?php
class Equipo {

    public $conexion;

    function __construct() {
        $this->conexion = null;
    }

    public function bdconn()
    {
        $this->conexion = new mysqli("localhost","root", "", "nba");
        if ($this->conexion->connect_errno) 
        echo "Fallo al conectar a MySQL: " . $this->conexion->connect_errno;
        
        return $this->conexion;
    }

    public function listado()
    {
        return $this->conexion->query("SELECT * FROM equipos");
    }

    public function insertarEquipo($nom,$ciu,$conf,$div)
    {
        return $this->conexion->query("INSERT INTO equipos (Nombre,Ciudad,COnferencia,Division) VALUES ('$nom','$ciu','$conf','$div)");
    }


}
?>