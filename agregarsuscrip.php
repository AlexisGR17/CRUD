<!DOCTYPE html>
<html lang="en">
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
 </head>
 <body >
  <div>
<nav class="bg-black">

  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.html"><img src="poster.png" width="50" height="50"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/jon/consultasm.php"><font color="white">Medicamentos</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/jon/consultae.php"><font color="white">Envios</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/jon/consultas.php"><font color="white">Consulta</font></a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="anuncios.php"><font color="white">Anuncios</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/jon/Calculadora/index.html"><font color="white">Otro</font></a>
  </li>
  <li>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Anuncio Video
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" align="center" id="exampleModalLabel">Video Farmacias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <video src="anuncio_video.mp4" poster="poster.png" controls width="467"></video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  </li>
</ul>
</nav>
<!-- area de contenido -->
   <div class="container" >
    <center>
    <h1><font color="#40c4f">Contacto</font></h1>
    <?php
include("conexion.php");
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$suscripcion=$_POST['suscripcion'];


$query =("INSERT INTO suscripcion VALUES ('','$nombre','$telefono','$suscripcion')");
$resultado=$conexion->query($query);
 if ($resultado) {
   header("Location:consultasuscrip.php");
}
else {
  echo "no se pudo guardar";
}

?>
<br>

    </center>
  </div>



     <style>
footer {
width: 100%;
text-align: center;
font-size: 20px;
font-weight: bold;
color: #ffffff;
padding: 30px;

}
</style>
<footer class="bg-black">
  <font>Farmacias Jhon DE GUADALAJARA</font>
</footer>
   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
  </html>