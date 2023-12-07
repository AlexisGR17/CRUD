<?php
  include("conexion.php");
  $id= $_REQUEST['id_provedor'];
  $nombre= $_POST['nombre'];
  $telefono= $_POST['telefono'];
  $producto= $_POST['producto'];
  $cantidad= $_POST['cantidad'];
  $descripcion= $_POST['descripcion'];
  
echo $nombre;
  $query="UPDATE provedor
              SET nombre='$nombre',
              telefono='$telefono',
              producto='$producto',
              cantidad='$cantidad',
              descripcion='$descripcion'
          

                  
              WHERE id_provedor= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultaprov.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>