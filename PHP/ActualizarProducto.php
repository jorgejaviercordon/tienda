<html>
<head>
    <title>Gestor de Tienda Online v1</title>
  </head>
  <body>
    <h1>Actualizar PRODUCTO</h1>
    <h2>Introduce los datos del nuevo producto a actualizar</h2>
    <form action="./controladorActualizarProducto.php" method="post">
          codigo: <input type="text" name="codigo"><br>
          descripcion: <input type="text" name="descripcion"><br>
          porcentajeRebaja: <input type="text" name="porcentajeRebaja"><br>
          estaRebajado: <input type="text" name="estaRebajado"><br>
          precio: <input type="text" name="precio"><br>
          <input type="submit">
    </form>

</body>
</html>
