<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" 
    media="screen,projection"/>

    <!-- QUERYMINE Page Center Css -->
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
<div class="btn-group">
  <button type="button" class="btn btn-danger">Consultas</button>
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
            html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
             background: url();   
     background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
        }
    </style>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body bgcolor="bola.jfif" >
    

        <!-- Form Section -->
           <?php
include("conexion.php");
$id=$_REQUEST['id_contacto'];
$query="SELECT * FROM contacto WHERE id_contacto='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

?>
    

 <form action="modificarc.php?id_contacto=<?php echo $row['id_contacto']; ?>" method="POST" enctype="multipart/form-data" >

        <div class="row margin">
            <div class="col s12 m12 l12 center">
                <img src="bola.jfif"
                 alt="" class="responsive-img circle" style="width:100px;">
                <h2>MODIFICAR DATO</h2>
            </div>
        </div>

        

        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">home</i>
                <input  type="text" name="telefono" value="<?php echo $row['telefono'];?>"  style="margin-left: 154px;"/>
                <label for="username">Telefono</label>
            </div>
        </div>
         <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="correo_electronico" style="margin-left: 127px;" value="<?php echo $row['correo_electronico'];?>" />
                <label for="username">Correo</label>
            </div>
        </div>
        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">money</i>
                <input type="text" name="redes_sociales" style="margin-left: 127px;" value="<?php echo $row['redes_sociales'];?>" />
                <label for="username">redes</label>
            </div>
        </div>


<br>
            <!-- Form Chekbox (Remember Me) Input Section -->

            <!-- Form Button Section  -->

        <div class="center">
             <input   type="submit" value="Guardar" /> 
        </div>

            <!-- Form "Register Now" And "Forgot Password" Link Section. -->

        
    </div>
</form>



              
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" 
    src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
  </body>
</html>