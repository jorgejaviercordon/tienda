<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $DNI;   
  private $Nombre;
  private $Apellidos;  
  private $Email;     
  private $Fecha_nacimiento;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDNI, $nNombre, $nApellidos, $nEmail, $nFecha_nacimiento) {
    $this->DNI = $nDNI;
    $this->Nombre = $nNombre;
    $this->Apellidos = $nApellidos;
    $this->Email = $nEmail;
    $this->Fecha_nacimiento = $nFecha_nacimiento; 
  }

  //Activar / desactivar EL email
  function cambiarEmail($cambiarEmail) {
      $this->email = $cambiarEmail;
  }

  //Getters

  function getDNI() {
    return $this->DNI;
  }

  function getNombre() {
    return $this->Nombre;
  }
  function getApellidos() {
    return $this->Apellidos;
  }
function getEmail() {

return $this->Email;}

  function getFecha_nacimiento() {
    return $this->Fecha_nacimiento;
  }

  function imprimeCliente() {
    return "<p>$this->DNI,$this->Nombre,$this->Apellidos,$this->Email,$this->Fecha_nacimiento</p>";
  }


  //sql para inserción del cliente
  function getInsertSQL() {
   $sql = "INSERT INTO clientes (DNI, Nombre, Apellidos,Email,Fecha_nacimiento) VALUES ('$this->DNI','$this->Nombre','$this->Apellidos','$this->Email','$this->Fecha_nacimiento') ";

    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "apellidosasc":
        $sql = $sql . "Apellidos ASC";
        break;
      case "apellidosdesc":
        $sql = $sql . "Apellidos DESC";
        break;
      case "emailasc":
        $sql = $sql . "Email ASC";
        break;
      case "emaildesc":
          $sql = $sql . "Email DESC";
          break;
      default:
        $sql = $sql . "Email ASC";
    }

    return $sql;
  }

//sql para inserción del producto
 function getUpdatetSQL() {
  $sql = "UPDATE productos SET codigo = $this->codigo, descripcion = $this->descripcion, rebaja = $this->porcentajerebaja, estarebajas = $this->estaRebajado, precio = $this->precio = WHERE codigo= $this->codigo;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
