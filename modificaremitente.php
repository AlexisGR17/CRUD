<?php
  include("conexion.php");
  $id= $_REQUEST['id_remitente'];
  $nombre= $_POST['nombre'];
  $telefono= $_POST['telefono'];
  $codigo_postal= $_POST['codigo_postal'];
  $calle_avenida=$_POST['calle_avenida'];
   $municipio=$_POST['municipio'];
echo $nombre;
  $query="UPDATE remitente
              SET nombre='$nombre',
			  telefono='$telefono',
                codigo_postal='$codigo_postal',
              calle_avenida='$calle_avenida',
               municipio='$municipio'

                  
              WHERE id_remitente= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultaremitente.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>