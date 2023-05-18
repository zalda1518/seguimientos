<?php

include('conexion.php');



$mes = $_POST['mes'];
$cliente = $_POST['cliente'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$pedido = $_POST['pedido'];


$conexion->query("INSERT INTO clientes (mes,cliente,cedula,direccion,telefono,pedido) VALUES 
('$mes','$cliente','$cedula','$direccion','$telefono','$pedido')");


if($mes =="" || $cliente == "" || $cedula == "" || $direccion === "" || $telefono === "" || $pedido === ""){
     echo "<script> alert('debe llenar todos los campos');
     location.href = 'index.html';</script>";
     exit();
     
     
}
 if($conexion){
    
     echo "<script> alert('datos guardados correctamente');
     location.href = 'index.html';</script>";
    
    
}