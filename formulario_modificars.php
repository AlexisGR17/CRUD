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
$id=$_REQUEST['id_serv'];
$query="SELECT * FROM servicios WHERE id_serv='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

?>
    

 <form action="modificars.php?id_serv=<?php echo $row['id_serv']; ?>" method="POST" enctype="multipart/form-data" >

        <div class="row margin">
            <div class="col s12 m12 l12 center">
                <img src="bola.jfif"
                 alt="" class="responsive-img circle" style="width:100px;">
                <h2>Servicios</h2>
            </div>
        </div>

        

        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">home</i>
                <input  type="text" name="nom_serv" value="<?php echo $row['nom_serv'];?>"  style="margin-left: 154px;"/>
                <label for="username">nombre</label>
            </div>
        </div>
         <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="descripcion" style="margin-left: 127px;" value="<?php echo $row['descripcion'];?>" />
                <label for="username">Descripcion</label>
            </div>
        </div>
        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">money</i>
                <input type="text" name="provedor" style="margin-left: 127px;" value="<?php echo $row['provedor'];?>" />
                <label for="username">provedor</label>
            </div>
        </div>

  <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">money</i>
                <input type="text" name="precio" style="margin-left: 127px;" value="<?php echo $row['precio'];?>" />
                <label for="username">precio</label>
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