<?php
  include("conexion.php");
  $id= $_REQUEST['id_producto'];
  $producto= $_POST['producto'];
  $precio= $_POST['precio'];
  $descripcion= $_POST['descripcion'];
  
echo $nombre;
  $query="UPDATE productos
              SET producto='$producto',
			 precio ='$precio',
                descripcion='$descripcion'
          

                  
              WHERE id_producto= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultaproducto.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>