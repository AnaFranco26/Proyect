

<?php 

require_once('../conexion/conexion.php');
require_once('../model/usuario_model.php');

$mensaje=null;
$nombre_usuario=$_POST['nombre_usuario'];
$password=$_POST['password'];
$tipo_usuario=$_POST['tipo_usuario'];

if( strlen($nombre_usuario)>0&&strlen($password)>0&&strlen($tipo_usuario)>0){

$consulta=new usuario_model();
$mensaje=$consulta->agUsuario($nombre_usuario,$password,$tipo_usuario);

}
else{
	echo "error";
	
}
echo$mensaje;



function limpiarDatos($datos){

    $datos= trim($datos);
    $datos= htmlspecialchars($datos);
    $datos = filter_var($datos, FILTER_SANITIZE_STRING)
    return $datos;
}


function


 ?>
