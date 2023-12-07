<?php

  include("conexion.php");
  $id= $_REQUEST['id_remitente'];
  $query="DELETE FROM remitente
  WHERE id_remitente = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultaremitente.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>