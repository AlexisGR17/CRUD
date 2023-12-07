<?php

  include("conexion.php");
  $id= $_REQUEST['id_provedor'];
  $query="DELETE FROM provedor
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