<?php
  include("conexion.php");
  $id= $_REQUEST['id_contacto'];
  $telefono= $_POST['telefono'];
  $correo_electronico= $_POST['correo_electronico'];
  $redes_sociales= $_POST['redes_sociales'];
  
echo $telefono;
  $query="UPDATE contacto
              SET telefono='$telefono',
			  correo_electronico='$correo_electronico',
                redes_sociales='$redes_sociales'
              
                  
              WHERE id_contacto= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultacontacto.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>