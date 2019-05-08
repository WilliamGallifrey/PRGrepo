<?php 

require ('Conexion.php');

class Trabajador extends Conexion {
    private $id ='';
    private $nombre = '';
    private $apellidos = '';
    private $ph = '';
    private $conexion;
    private $proy = '';

    public function __construct()
    {
        
    }    

    public function registro()
    {
        if($this->connect())
            {   
                $this->conexion = $this->connect();
                $idquery = $this->conexion->query("SELECT id FROM trabajador WHERE nombre = '$this->nombre'");
                $id = mysqli_fetch_assoc($idquery)['id'];
                $res = $this->conexion->query("INSERT INTO trabajador (nombre, apellidos, precio_hora) VALUES ('$this->nombre','$this->apellidos',$this->ph)") or die($mysqli->error);
                $res2 = $this->conexion->query("INSERT INTO trabajador_proyecto (id_trabajador, id_proyecto, horas) VALUES ($id,$this->proy,$this->proy)") or die($mysqli->error);
                echo "Añadido correcto";
            }
            else
            {
                echo "<span class ='warning'>Ha habido un fallo de conexion a la base de datos</span>";
            }
    }

    public function anyade_datos()
    {
        if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['ph']) && isset($_POST['proy']) )
        {
            $this->nombre= $_POST['nombre'];
            $this->apellidos= $_POST['apellidos'];
            $this->ph= $_POST['ph'];
            $this->proy= $_POST['proy'];
        }

        else
            echo "<span class ='warning'>Uno o más de los valores introducidos no era correcto</span>";
    }
    
}

?>