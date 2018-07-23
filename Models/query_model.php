<?php

if (isset($_POST['puntos'])) {
    require_once $_POST['puntos'] . "Config/Conexion.php";
} else {
    require_once "../../Config/Conexion.php";
}
class Query_Modelo
{
    public $cnx = null;

    public function __construct()
    {
        $this->cnx = Conexion();
        return $this->cnx;
    }

    public function Query($query)
    {
        try {
            $consulta = $this->cnx->prepare($query);
            $resultado = $consulta->execute();
            $this->cnx = null;
        } catch (Exception $e) {
            $resultado = "Error:" . $e->getMessage();
        }
        return $resultado;
    }

    public function Cargar($sql)
    {
        try {
            $consulta = $this->cnx->query($sql);
            $this->cnx = null;
        } catch (Exception $e) {
            $consulta = "Error:" . $e->getMessage();
        }
        return $consulta;
    }
}
?>