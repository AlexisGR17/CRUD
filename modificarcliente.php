<?php
  include("conexion.php");
  $id= $_REQUEST['id_cliente'];
  $nombre= $_POST['nombre'];
  $telefono= $_POST['telefono'];
  $cuidad= $_POST['cuidad'];
  
echo $nombre;
  $query="UPDATE clientes
              SET nombre='$nombre',
			 telefono ='$telefono',
                cuidad='$cuidad'
          

                  
              WHERE id_cliente= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultacliente.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>