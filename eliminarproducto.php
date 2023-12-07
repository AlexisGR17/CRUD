<?php

  include("conexion.php");
  $id= $_REQUEST['id_producto'];
  $query="DELETE FROM productos
  WHERE id_producto = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultaproducto.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>