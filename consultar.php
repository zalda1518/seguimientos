 <!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>consultas</title>
  <style>
    #consult {
      border: solid 1px;
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      margin: auto;
      margin-top: 10px;
      padding: 10px;
      width: 250px;
      text-align: center;
      box-sizing: border-box;
    }

    .con {
      width: 200px;
      margin: 10px;
    }

    #con {
      height: 30px;
    }
  </style>
</head>

<body>
  <form action="consultar.php" method="post" id="consult">
    <input type="text" placeholder="Ingrese el mes a consultar" id="con" class="con" name="mes">
    <button class="con" type="submit" name="btn">Consultar</button>
  </form>

</body>

</html>

  -->

 <?php

  $host = "localhost";
  $usuario = "root";
  $clave = "";
  $basedatos = "seguimientos";

  $conexion = new mysqli($host, $usuario, $clave, $basedatos);
  $resultado = $conexion->query("SELECT * FROM clientes");

  ?>

 <table border='1px'; >
   <thead>
     <th>MES</th>
     <th>CLIENTE</th>
     <th>CEDULA</th>
     <th>DIRECCION</th>
     <th>TELEFONO</th>
     <th>PEDIDO</th>
   </thead>
   <tbody>

     <?php while ($datos = mysqli_fetch_array($resultado)) {  ?>
       <tr>
         <td><?php echo $datos['mes']; ?></td>
         <td><?php echo $datos['cliente']; ?></td>
         <td><?php echo $datos['cedula']; ?></td>
         <td><?php echo $datos['direccion']; ?></td>
         <td><?php echo $datos['telefono']; ?></td>
         <td><?php echo $datos['pedido']; ?></td>

       </tr>
     <?php } ?>
   </tbody>

 </table>

 <a href="index.html">Atras</a>