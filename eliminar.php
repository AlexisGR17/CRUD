<?php

  include("conexion.php");
  $id= $_REQUEST['id_emp'];
  $query="DELETE FROM empleados
  WHERE id_emp = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consulta.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>