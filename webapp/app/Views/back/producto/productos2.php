<div class="table-responsive">
  <table class="table">
    <thead>
      <tr class="bg-dark bg-gradient">
        <th scope="col">id_producto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Sucursal</th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require('stock_controller.php');
      $conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
      if(!$conexion) die ('Error al conectar al servidor'.mysql_error());
      $acentos = mysqli_query($conexion, "SET NAMES 'utf8'");
      $sql = "SELECT * FROM productos WHERE sucursal_id=(2) ORDER BY id_producto";
      $resultado = mysqli_query($conexion, $sql) or die ("Error en la consulta".mysql_error());
      while($registro=mysqli_fetch_array($resultado)){
      ?>
      <tr>
        <th scope="row"><?php echo $registro['id_producto']; ?></th>
        <td><?php echo $registro['nombre']; ?></td>
        <td><?php echo $registro['precio']; ?></td>
        <td><?php echo $registro['sucursal_id']; ?></td>
        <td><?php echo $registro['stock']; ?></td>
      </tr>
    </tbody>
  <?php }?>
  </table>
</div>