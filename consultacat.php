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
    <a class="nav-link" href="http://localhost/oron/principal.html"><font color="white">Inicio</font></a>
  </li>
  <li class="nav-item">
     <div class="container">
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
<br>
<!-------------------------------------->
  <center>
  <h1> Categoria 
  </h1>
   <br>
   <br></center>
   <div class="container">
   <table class="table">
        <thead>
          <tr>
<th>CLAVE</th>
<th>Categoria</th>
<th>Descripcion</th>
<th>OPERACIÓON</th>
<th>ELIMINAR</th>
<tr>

<?php
include("conexion.php");
$query="SELECT * FROM categoria";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
?>

<tr>
<td><?php echo $row['id_categoria']; ?></td>
<td><?php echo $row['categoria']; ?></td>
<td><?php echo $row['descripcion']; ?></td>


<td>
   <a type="submit" class="btn btn-outline-secondary" href="formulario_modificarcat.php?id_categoria=<?php echo $row['id_categoria'];?>">
    <img src="https://cdn5.dibujos.net/dibujos/pintados/201125/f2db30b527a16bfea022e7c6e9dcb93f.png"width="50px" height="50px">
    
  </a>
</td>
<td>
<a type="submit" class="btn btn-outline-danger" href="eliminarcat.php?id_categoria=<?php echo $row['id_categoria'];?>">
    <img src="https://www.vippng.com/png/detail/480-4804163_utiles-escolares-animados-escolar-animado-goma-de-borrar.png"width="50px" height="50px">
  </a>
</td>
</tr>
<?php  
}
?>
<a type="submit" class="btn btn-outline-danger" href="agregarcat.html">

    Alta 
   </a>
</table>
<br>
<!-------------------------------------->
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
  <font>Fats</font>
</footer>

   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
         
 </body>
</html>