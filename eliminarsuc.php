<?php

  include("conexion.php");
  $id= $_REQUEST['id_sucursal'];
  $query="DELETE FROM sucursal
  WHERE id_sucursal='$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultasu.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>