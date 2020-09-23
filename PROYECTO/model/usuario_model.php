<?php session_start():
 
 require_once('../conexion/conexion.php');
 require_once('../controller/controllerusuario.php');
 
 require_once('../view/html/registro.php');

if($_SERVER['REQUEST_METOD']=='POST')
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol = $_POST['rol'];

$errores='':

if (empty($usuario)|| empty($password)|| empty($rol)){
    $errores = '<li class="error">rellene los campos </li>';
} else{
    $conexion=conexion($bd_conexion);
    $statement= $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
    $statement->execute([
        ':usuario' => $usuario
    ]);
    $resultado = $statemen-> fetch();

    if ($resultado !=false){

        $errores.= '<li class= "error">Este usuario ya existe </li>';

    }
}

if($errores==''){
    $conexion=conexion($bd_conexion);
    $statement=$conexion->prepare('INSERT INTO usuarios (id_usuario, nombre_usuario, password, tipo_usuario'))
    VALUES(null, :id_usuario, nombre_usuario, :password, :tipo_usuario)');
    $statement->execute([
    ':nombre_usuario'=> $usuario,
    ':password'=>$password,
    ':tipo_usuario'=>$rol
    
    ]);

    header('location '.RUTA.'index.php');
}





?>
