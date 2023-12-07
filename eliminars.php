<?php

  include("conexion.php");
  $id= $_REQUEST['id_serv'];
  $query="DELETE FROM servicios
  WHERE id_serv = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultase.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>