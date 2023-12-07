<?php

  include("conexion.php");
  $id= $_REQUEST['id_contacto'];
  $query="DELETE FROM contacto
  WHERE id_contacto = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultacontacto.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>