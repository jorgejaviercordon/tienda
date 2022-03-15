n<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>MOSTRAR vendedores</h1>
    <h2>Introduce el tipo de ordenaci&oacute;n</h2>
    <form action="./controladorMostrarvendedores.php" method="post">
          Ordenado por: 
          <br><input type="radio" name="tipoOrdenacion" value="DNIasc">DNI Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="DNIdesc">DNI Descendente
          <br><input type="radio" name="tipoOrdenacion" value="emailasc">Email Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="emaildesc">Email Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
