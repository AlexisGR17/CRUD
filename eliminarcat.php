<?php

  include("conexion.php");
  $id= $_REQUEST['id_categoria'];
  $query="DELETE FROM categoria
  WHERE id_categoria='$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultacat.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>