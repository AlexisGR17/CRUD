<?php
  include("conexion.php");
  $id= $_REQUEST['id_serv'];
  $nombre= $_POST['nom_serv'];
  $descripcion= $_POST['descripcion'];
  $provedor= $_POST['provedor'];
   $precio= $_POST['precio'];
echo $nombre;
  $query="UPDATE servicios
              SET nom_serv='$nombre',
			  descripcion='$descripcion',
                provedor='$provedor',
               precio='$precio'
                  
              WHERE id_serv= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultase.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>
