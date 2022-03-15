<html>
  <head>
    <title>Proceso de inserci&oacute;n de nuevo Cliente</title>
  </head>
  <body>
    <h1>Guardando el nuevo Cliente...</h1>

<?php

//incluimos la clase con la que trabajamos
require("./cliente.php");


//recoger valores del formULARIO

$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Email = $_POST["Email"];
$Fecha_nacimiento = $_POST["Fecha_nacimiento"];
if ($Email <> true) {
  $Email = false;
}

echo "La fecha de nacimiento  del formulario es: $Fecha_nacimiento<br>";
//hemos recogido datos del formulario... creamos objeto
$ClienteNuevo = new Cliente($DNI,$Nombre,$Apellidos,$Email,$Fecha_nacimiento);
//echo $clienteNuevo->getFecha_nacimiento()."<br>";


//Vamos a por la
$SQLInsert = $ClienteNuevo->getInsertSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLInsert."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=iaw_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLInsert);
   echo "Inserci&oacute;n correcta";
} catch (PDOException $e) {
    echo "Insert failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>
