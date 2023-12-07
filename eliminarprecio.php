<?php

  include("conexion.php");
  $id= $_REQUEST['id_tarifa'];
  $query="DELETE FROM tarifas
  WHERE id_tarifa = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultaprecios.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>