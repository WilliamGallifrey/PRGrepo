<?php
class Usuario {

    public $conexion;

    function __construct() {
        bdconn();
    }

    public function bdconn()
    {
        $this->conexion = new mysqli("localhost","root", "", "nba");
        if ($this->conexion->connect_errno) 
        echo "Fallo al conectar a MySQL: " . $this->conexion->connect_errno;
    }

    public function listado()
    {
        return $this->conexion->query("SELECT * FROM jugadores");
    }

    public function insertar($nom,$pro,$alt,$pes,$pos,$neq)
    {
        return $this->conexion->query("INSERT INTO jugadores (Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES ('$nom','$pro','$alt','$pes','$pos','$neq')");
    }


}
?>