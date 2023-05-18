
<?php
$host = 'localhost';
$usuario = 'root';
$clave = '';
$basedatos = 'seguimientos';



$conexion = mysqli_connect($host, $usuario, $clave, $basedatos);

if ($conexion->connect_error) {
  echo 'error de conexion a la base de datos';
  exit();
}

?>