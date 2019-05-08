<?php 

require ('Conexion.php');

class Proyecto extends Conexion {
    private $nombre = '';

    public function __construct()
    {
        
    } 

    public function lista()
    {
        if($this->connect())
            {   
                $this->conexion = $this->connect();
                $res = $this->conexion->query("SELECT * FROM proyecto") or die($mysqli->error);
                return $res;
            }
            else
            {
                echo "<span class ='warning'>Ha habido un fallo de conexion a la base de datos</span>";
            }
    }
}

?>