<?php
//isset sirve para verificar si la variable existe , en este caso opcion
$_POST['puntos'] = "../";
if (isset($_GET['opcion'])) {
	$operacion = $_GET['opcion'];
} else {
	$operacion = 0;
}
if (isset($_POST['puntos'])) {
	require_once $_POST['puntos'] . "Models/query_model.php";
}else{
    require_once "../Models/query_model.php";
}

$res = array('error' => false);

// $operacion = 'read';

function Cargar_Consulta() {
	$obj = new Query_Modelo();
	$sql = "SELECT ag.id_agencia As id,ag.codigo_agencia As Codigo,ag.direccion_agencia As Direccion, ag.telefono_agencia As Telefono FROM tbl_agencia AS ag";
	return $obj->Cargar($sql);
}
if($operacion == 'read'){
    
	$datos = array();
    $resultado = Cargar_Consulta();
	while($row = $resultado->fetch_assoc()){
		array_push($datos, $row);
    }
	$res['Datos'] = $datos;
}
if ($operacion == 'create') {
	$obj = new Query_Modelo();

	$codigo = $_POST["Codigo"];
	$direccion = $_POST["Direccion"];
	$telefono = $_POST["Telefono"];

	$query = "INSERT INTO tbl_agencia ( codigo_agencia, direccion_agencia,telefono_agencia)
			VALUES ('" . $codigo . "','" . $direccion . "','" . $telefono . "') ";
		$resultado = $obj->Query($query);
		
	if($resultado){
		$res['message'] = "Registro Agregado";
	} else{
		$res['error'] = true;
		$res['message'] = "Error al insertar registro";
	}
}

if ($operacion == 'update') {
	$obj = new Query_Modelo();

	$id = $_POST["id"];
	$codigo = $_POST["Codigo"];
	$direccion = $_POST["Direccion"];
	$telefono = $_POST["Telefono"];

	$query = "UPDATE tbl_agencia
			SET codigo_agencia = '" . $codigo . "', direccion_agencia = '" . $direccion . "', telefono_agencia = '" . $telefono . "'
			WHERE id_agencia = '" . $id . "'";
		$resultado = $obj->Query($query);
		
	if($resultado){
		$res['message'] = "Registro Actualizado";
	} else{
		$res['error'] = true;
		$res['message'] = "Error al actualizar registro";
	}
}
if ($operacion == 'delete') {
	$obj = new Query_Modelo();

	$id = $_POST["id"];
	
	$query = "DELETE FROM tbl_agencia WHERE id_agencia = '" . $id . "'";
		$resultado = $obj->Query($query);
		
	if($resultado){
		$res['message'] = "Registro Eliminado";
	} else{
		$res['error'] = true;
		$res['message'] = "Error al eliminar registro";
	}
}

// header("Content-type: application/json");
echo json_encode($res);
die();
?>