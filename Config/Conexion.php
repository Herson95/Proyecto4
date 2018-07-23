<?php
function Conexion(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "bd_agencia";
    try{
        $cnx = mysqli_connect($server,$user,$pass,$db);
       /* if(!$cnx){
            die ("ERROR EN LA CONEXION CON MYSQL : " . mysqli_error());
        }

        $base = mysqli_select_db($cnx,$db);
        if(!$base){
            die ("ERROR EN LA CONEXION CON LA BASE DE DATOS : " . mysqli_error($cnx));
        }*/
    }
    catch(mysqli_sql_excepcion $e){
        throw $e->getMessage();
    }
    return $cnx;
}
?>