<?php

  include("conexion.php");
  $id= $_REQUEST['id_cliente'];
  $query="DELETE FROM clientes
  WHERE id_cliente = '$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultacliente.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>