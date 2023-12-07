<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "integradora";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO clientes (id_clientes, nombre, telefono, ciudad)
VALUES ('John', 'Doe', '7223743589', 'toluca')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
