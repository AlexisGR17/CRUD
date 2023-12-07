<?php
  include("conexion.php");
  $id= $_REQUEST['id_tarifa'];
  $precio= $_POST['precio'];
  $descripcion= $_POST['descripcion'];

  
echo $precio;
  $query="UPDATE tarifas
              SET precio='$precio',
			 descripcion='$descripcion'
                
          

                  
              WHERE id_tarifa= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultaprecios.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>