<?php
	
  
class vendedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $Nombre;   
  private $DNI;
  private $Direccion;  
  private $Email;     
  private $Telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nNombre, $nDNI, $nDireccion, $nEmail, $nTelefono) {
    $this->Nombre = $nNombre;
    $this->Dni = $nDni;
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

  function getDNI() {
    return $this->DNI;
  }
  function getDireccion() {
    return $this->Direccion;
  }
function getEmail() {

return $this->Email;}

  function getTelefono() {
    return $this->Telefono;
  }

  function imprimevendedor() {
    return "<p>$this->Nombre,$this->DNI,$this->Direccion,$this->Email,$this->Telefono</p>";
  }


  //sql para inserción del provedor
  function getInsertSQL() {
   $sql = "INSERT INTO vendedores (Nombre, DNI, Direccion,Email,Telefono) VALUES ('$this->Nombre','$this->DNI','$this->Direccion','$this->Email','$this->Telefono') ";
    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM vendedoress ORDER BY ";

    switch ($tipoOrdenacion) {
      case "DNIasc":
        $sql = $sql . "DNI ASC";
        break;
      case "DNIdesc":
        $sql = $sql . "DNI DESC";
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
