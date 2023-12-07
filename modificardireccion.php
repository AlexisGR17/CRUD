<?php
  include("conexion.php");
  $id= $_REQUEST['id_direccion'];
  $calle_avenida= $_POST['calle_avenida'];
  $Municipio= $_POST['Municipio'];
  $codigo_postal= $_POST['codigo_postal'];
  $ciudad=$_POST['ciudad'];
echo $calle_avenida;
  $query="UPDATE direccion
              SET calle_avenida='$calle_avenida',
			  Municipio='$Municipio',
                codigo_postal='$codigo_postal',
              ciudad='$ciudad'
                  
              WHERE id_direccion= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultadireccion.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>