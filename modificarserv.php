<?php
  include("conexion.php");
  $id= $_REQUEST['id_serv'];
  $nom_serv= $_POST['nom_serv'];
  $descripcion= $_POST['descripcion'];
  $provedor= $_POST['provedor'];
  $precio=$_POST['precio'];
echo $nom_serv;
  $query="UPDATE servicios
              SET nom_serv='$nom_serv',
			  descripcion='$descripcion',
                provedor='$provedor',
              precio='$precio'
              

                  
              WHERE id_serv= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultaserv.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>