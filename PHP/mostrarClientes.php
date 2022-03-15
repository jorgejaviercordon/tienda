<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>MOSTRAR CLIENTES</h1>
    <h2>Introduce el tipo de ordenaci&oacute;n</h2>
    <form action="./controladorMostrarClientes.php" method="post">
          Ordenado por: 
          <br><input type="radio" name="tipoOrdenacion" value="apellidosasc">Apellido Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="apellidosdesc">Apellidos Descendente
          <br><input type="radio" name="tipoOrdenacion" value="emailasc">Email Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="emaildesc">Email Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
