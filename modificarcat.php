<?php
  include("conexion.php");
  $id= $_REQUEST['id_categoria'];
  $categoria= $_POST['categoria'];
  $descripcion= $_POST['descripcion'];

  
echo $categoria;
  $query="UPDATE categoria
              SET categoria='$categoria',
			 descripcion='$descripcion'

          

                  
              WHERE id_categoria= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultacat.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>