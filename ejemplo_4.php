<?php
//cadena de conexion al servidor y base de datos
$connection = mysqli_connect("localhost","root","","ever",3306);

//Para verificar si existe algun error
if(!$connection){
    die("La conexion fallo: ".mysqli_connect_error());
}
echo "Conectado exitosamente con procedimientos";

//Cerrar la conexion
mysqli_close($connection);
?>