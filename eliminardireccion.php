<?php

  include("conexion.php");
  $id= $_REQUEST['id_direccion'];
  $query="DELETE FROM direccion
  WHERE id_direccion = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultadireccion.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>