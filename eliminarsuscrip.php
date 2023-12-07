<?php

  include("conexion.php");
  $id= $_REQUEST['id_suscripcion'];
  $query="DELETE FROM suscripcion
  WHERE id_suscripcion = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultasuscrip.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>