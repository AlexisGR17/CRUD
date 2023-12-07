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
$id=$_REQUEST['id_emp'];
$query="SELECT * FROM empleados WHERE id_emp='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

?>
    

 <form action="modificar.php?id_emp=<?php echo $row['id_emp']; ?>" method="POST" enctype="multipart/form-data" >

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
                <input  type="text" name="nom_cliente" value="<?php echo $row['nom_cliente'];?>"  style="margin-left: 154px;"/>
                <label for="username">nombre</label>
            </div>
        </div>
         <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="apellido_cliente" style="margin-left: 127px;" value="<?php echo $row['apellido_cliente'];?>" />
                <label for="username">Apellido</label>
            </div>
        </div>
        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">money</i>
                <input type="text" name="edad" style="margin-left: 127px;" value="<?php echo $row['edad'];?>" />
                <label for="username">edad</label>
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