<?php
  include("conexion.php");
  $id= $_REQUEST['id_emp'];
  $nombre= $_POST['nom_cliente'];
  $apellido= $_POST['apellido_cliente'];
  $edad= $_POST['edad'];
  
echo $nombre;
  $query="UPDATE empleados
              SET nom_cliente='$nombre',
			  apellido_cliente='$apellido',
                edad='$edad'
              
                  
              WHERE id_emp= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consulta.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>
