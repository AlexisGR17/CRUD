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

<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">

  <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"><img src="R.png" width="50" height="50"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.google.com/maps/dir//Plaza+Sendero,+Blvd.+Miguel+Alem%C3%A1n+55,+Parque+Industrial+Lerma+Toluca,+52120+Lerma+de+Villada,+M%C3%A9x./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x85cd8ac8ecc4b265:0x139d3f6e5bd49bd6?sa=X&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIDxAA&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIFBAO"><font color="white">Ubicacion</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/oron/consultaserv.php"><font color="white">Envios</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/oron/agregarserv.html"><font color="white">Agregar envio</font></a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="anuncios.php"><font color="white">Anuncios</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/jon/Calculadora/index.html"><font color="white">Login</font></a>
  </li>
  <li class="nav-item">
     <div class="container">
<div class="btn-group">
  <button type="button" class="btn btn-danger">Catalogos</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/oron/consultacontacto.php">Contacto</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultadireccion.php">Direcciones</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultaremitente.php">Remitentes</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaserv.php">Servicios</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultasuscrip.php">Suscripciones</a></li>
        <li><a class="dropdown-item" href="http://localhost/oron/consultacliente.php">Clientes</a></li>
     <li><a class="dropdown-item" href="http://localhost/oron/consultaprecios.php">Tarifas</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultasu.php">Sucursal</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaprov.php">Provedores</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultacat.php">Categoria</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaproducto.php">Productos</a></li>
  </ul>
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
<br>
<!-- area de contenido -->
  <div class="container">
    <h1 class="titulo"><i>Generar Envio</i></h1>
    
  <div class="row">
    <form class="col s12" method="POST" action="http://localhost//oron/agregarcat.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">Categoria:</i>
          <input class="form-control"  REQUIRED name="Categoria" type="text" class="validate" id="Categoria">
        </div>
        <br>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">descripcion:</i>
          <input class="form-control" REQUIRED name="descripcion" type="text" class="validate" id="descripcion">
        </div>
      </div>
      <br>
      <input class="btn btn-danger" type="submit" value="guardar">
      </form></div>
  </div> <br> <br> <br>

<footer class="bg-black">
  <font>Farmacias Jhon DE GUADALAJARA</font>
</footer>

   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
         
 </body>
</html>