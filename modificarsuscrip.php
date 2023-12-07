<?php
  include("conexion.php");
  $id= $_REQUEST['id_suscripcion'];
  $nombre= $_POST['nombre'];
  $telefono= $_POST['telefono'];
  $suscripcion= $_POST['suscripcion'];
  
echo $nombre;
  $query="UPDATE suscripcion
              SET nombre='$nombre',
			 telefono ='$telefono',
                suscripcion='$suscripcion'
          

                  
              WHERE id_suscripcion= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultasuscrip.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>