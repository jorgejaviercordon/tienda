<?php

  
class proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $Nombre;   
  private $Cif;
  private $Direccion;  
  private $Email;     
  private $Telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nNombre, $nCif, $nDireccion, $nEmail, $nTelefono) {
    $this->Nombre = $nNombre;
    $this->Cif = $nCif;
    $this->Direccion = $nDireccion;
    $this->Email = $nEmail;
    $this->Telefono = $nTelefono; 
  }

  //Activar / desactivar EL email
  function cambiarEmail($cambiarEmail) {
      $this->email = $cambiarEmail;
  }

  //Getters

  function getNombre() {
    return $this->Nombre;
  }

  function getCif() {
    return $this->Cif;
  }
  function getDireccion() {
    return $this->Direccion;
  }
function getEmail() {

return $this->Email;}

  function getTelefono() {
    return $this->Telefono;
  }

  function imprimeProveedor() {
    return "<p>$this->Nombre,$this->Cif,$this->Direccion,$this->Email,$this->Telefono</p>";
  }


  //sql para inserción del provedor
  function getInsertSQL() {
   $sql = "INSERT INTO proveedores (Nombre, Cif, Direccion,Email,Telefono) VALUES ('$this->Nombre','$this->Cif','$this->Direccion','$this->Email','$this->Telefono') ";
    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM proveedores ORDER BY ";

    switch ($tipoOrdenacion) {
      case "Cifasc":
        $sql = $sql . "Cif ASC";
        break;
      case "Cifdesc":
        $sql = $sql . "Cif DESC";
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


}
?>
