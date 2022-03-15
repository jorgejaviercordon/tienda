<html>
  <head>
    <title>Proceso de inserci&oacute;n de nuevo Provedor</title>
  </head>
  <body>
    <h1>Guardando el nuevo Provedor...</h1>

<?php

//incluimos la clase con la que trabajamos
require("./proveedor.php");


//recoger valores del formULARIO

$Nombre = $_POST["Nombre"];
$Cif = $_POST["Cif"];
$Direccion = $_POST["Direccion"];
$Email = $_POST["Email"];
$Telefono = $_POST["Telefono"];
if ($Email <> true) {
  $Email = false;
}

echo "La el numero de telefono  del formulario es: $Telefono<br>";
//hemos recogido datos del formulario... creamos objeto
$ProveedorNuevo = new Proveedor($Nombre,$Cif,$Direccion,$Email,$Telefono);
//echo $clienteNuevo->getFecha_nacimiento()."<br>";


//Vamos a por la
$SQLInsert = $ProveedorNuevo->getInsertSQL();

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
