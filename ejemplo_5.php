<?php
//conexion al servidor con objeto con base de datos
$connection = new mysqli("localhost","root","","ever",3306);

//Para verificar si existe algun error
if(!$connection){
    die("La conexion fallo: ".$connection->connect_error());
}
echo "Conectado exitosamente con objetos";

//Cerrar la conexion
mysqli_close($connection);
?>