<?php
  include("conexion.php");
  $id= $_REQUEST['id_sucursal'];
  $calle_avenida=$_POST['calle_avenida'];
  $Municipio=$_POST['Municipio'];
  $codigo_postal=$_POST['codigo_postal'];
  
echo $calle_avenida;
  $query="UPDATE sucursal
              SET calle_avenida='$calle_avenida',
       Municipio ='$Municipio',
                codigo_postal='$codigo_postal'
          

                  
              WHERE id_sucursal='$id'";

  $resultado=$conexion->query($query);
  if($resultado)
    {
      header("Location:consultasu.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>