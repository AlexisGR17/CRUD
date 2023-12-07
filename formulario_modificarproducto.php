<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
 </head>

 <body >
  <div>
 <div>

<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">

  <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"><img src="R.png" width="50" height="50"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.google.com/maps/dir//Plaza+Sendero,+Blvd.+Miguel+Alem%C3%A1n+55,+Parque+Industrial+Lerma+Toluca,+52120+Lerma+de+Villada,+M%C3%A9x./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x85cd8ac8ecc4b265:0x139d3f6e5bd49bd6?sa=X&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIDxAA&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIFBAO"><font color="white">Ubicacion</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/oron/principal.html"><font color="white">Inicio</font></a>
  </li>
  <li class="nav-item">
  </div>
  </div>
  </li>
  <li>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
  </div>
</div>
  </li>
</ul>
</nav>
<style>
  .container {
        width: 90%;
        max-width: 800px;
        margin: 100px auto;
      }
      form {
        box-shadow: 0 0 03px rgba(0, 0, 0, 100);
        border-radius: 7px;
        padding: 18px;
      }
      .titulo {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding-bottom: 10px;
      }
      .btn-danger {
        width: 100%;

      }
      footer {
      width: 100%;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      color: #ffffff;
      padding: 30px;

      }
</style>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body bgcolor="bola.jfif" >
    

        <!-- Form Section -->
           <?php
include("conexion.php");
$id=$_REQUEST['id_producto'];
$query="SELECT * FROM productos WHERE id_producto='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

?>
    <div class="container">
    <h1 class="titulo"><i>Agregar producto</i></h1>
    
  <div class="row">
    <form class="col s12" method="POST" action="modificarproducto.php?id_producto=<?php echo $row['id_producto']; ?>"method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">producto:</i>
          <input class="form-control"  REQUIRED name="producto" type="text" value="<?php echo $row['producto'];?>" class="validate" id="nombre">
        </div>
        <br>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">Precio:</i>
          <input class="form-control" REQUIRED name="precio" type="text"value="<?php echo $row['precio'];?>" class="validate" id="precio">
        </div>
      </div>
    
       <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">Descripcion</i>
          <input class="form-control" REQUIRED name="descripcion" type="text"value="<?php echo $row['descripcion'];?>" class="validate" id="descripcion">
        </div>
      </div>
      
      <br>
      <input class="btn btn-danger" type="submit" value="guardar">
      </form></div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" 
    src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
  </body>
</html>